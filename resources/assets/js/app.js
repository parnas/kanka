/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

import deleteConfirm from './components/delete-confirm.js';
import dynamicMentions from "./mention";

require('./tags.js');
require('./components/select2.js');

$(document).ready(function() {

    // Inject the isMobile variable into the window. We don't want ALL of the javascript
    // for mobiles, namely the tooltip tool.
    window.kankaIsMobile = window.matchMedia("only screen and (max-width: 760px)");
    if (!window.kankaIsMobile.matches) {
        initTooltips();
    }

    /*$('[data-toggle="popover"]').popover({
        sanitize: false,
    });*/

    window.initForeignSelect();
    initSpectrum();
    initSubmenuSwitcher()


    if ($('#delete-confirm-form').length > 0) {
        $('#delete-confirm-form').on('keyup keypress', function (e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });
    }

    // Treeview for locations
    treeViewInit();

    manageTabs();

    deleteConfirm();
    dynamicMentions();
    initAjaxPagination();
    initEntityNoteToggle();
    initDynamicDelete();
    initImageRemoval();
    initDialogs();

    /**
     * Whenever a modal or popover is shown, we'll need to re-bind various helpers we have.
     */
    $(document).on('shown.bs.modal shown.bs.popover', function() {
        // Also re-bind select2 elements on modal show
        window.initForeignSelect();
        window.initTags(); // Need this for the abilities popup on entities
        initAjaxPagination();
        initTooltips();
        initSpectrum();
        initDynamicDelete();
        initImageRemoval();
        deleteConfirm();
    });
});



/**
 * Initiate spectrum for the various fields
 */
function initSpectrum() {
    if (!$.isFunction($.fn.spectrum)) {
        return;
    }

    $.each($('.spectrum'), function () {
        $(this).spectrum({
            preferredFormat: "hex",
            showInput: true,
            showPalette: true,
            allowEmpty: true,
            appendTo: $(this).data('append-to') ?? null,
        });
    });
}

/**
 * Register the tooltip and tooltip-ajax helper
 */
function initTooltips() {
    $('[data-toggle="tooltip"]').tooltip();
    window.ajaxTooltip();
}


/**
 * Go through table trs to add on click support
 */
function treeViewInit() {
    let treeViewLoader = $('.list-treeview');
    if (treeViewLoader.length === 0) {
        return;
    }

    let link = treeViewLoader.data('url');
    $.each($('.table-nested > tbody > tr'), function () {
        let children = $(this).data('children');
        if (parseInt(children) > 0) {
            $(this).addClass('tr-hover');
            $(this).on('click', function (e) {
                let target = $(e.target);
                // Don't trigger the click on the checkbox (used for bulk actions)
                //console.log('click tr', target);
                if (e.target.type !== 'checkbox' && target.data('tree') !== 'escape') {
                    window.location = link + '?parent_id=' + $(this).data('id');
                }
            });
        }
    });
}

/**
 * Save and manage tabs for when refreshing
 * Move this to crud or forms
 */
function manageTabs() {
    let tabLink = $('.nav-tabs li a');
    tabLink.click(function (e) {
        e.preventDefault();

        // If tab isn't ajax request
        if (!$(this).data('url')) {
            $(this).tab('show');
        }
    });

    // store the currently selected tab in the hash value
    tabLink.on("shown.bs.tab", function (e) {
        e.preventDefault();
        let tabId = $(e.target).attr("href").substr(1);
        let dataToggle = $(e.target).attr('ajax-modal');
        let nohash = $(e.target).data("nohash");

        if ((dataToggle && dataToggle === 'ajax-modal') || (nohash)) {
            // Modal? Don't do more.
            return true;
        }
        // We fake a tab_ to avoid page jumps from the browser
        window.location.hash = 'tab_' + tabId;
    });

    // on load of the page: switch to the currently selected tab
    let tabHash = window.location.hash.replace('tab_', '');
    $('ul.nav-tabs > li > a[href="' + tabHash + '"]').tab('show');
}

function resetSubmitButton(id) {
    var newEntitySaveButton = $(id);
    newEntitySaveButton.text(newEntitySaveButton.data('text')).prop('disabled', false);
}

function initImageRemoval() {
    $.each($('.img-delete'), function (index) {
        $(this).unbind('click').click(function (e) {
            e.preventDefault();
            $('input[name=' + $(this).data('target') + ']')[0].value = 1;
            $(this).parent().parent().hide();
        });
    });
}

/**
 * Replace pagination for ajax links
 */
function initAjaxPagination() {
    $('.pagination-ajax-links a').on('click', function(e) {
        e.preventDefault();
        var paginationAjaxBody = $('.pagination-ajax-body');
        paginationAjaxBody.find('.loading').show();
        paginationAjaxBody.find('.pagination-ajax-content').hide();

        $.ajax(
            $(this).attr('href')
        ).done(function (res) {
            paginationAjaxBody.parent().html(res);
            initAjaxPagination();
        });
        return false;
    })
}


function initDynamicDelete() {
    $('.btn-dynamic-delete').popover({
        html: true,
        placement: 'top',
        sanitize: false
    });

    $('a[data-toggle="delete-form"]').unbind('click').click(function (e) {
        e.preventDefault();
        let target = $(this).data('target');
        //console.log('target', target);
        $(target).submit();
    });

    $('.btn-popover').popover({
        html: true,
        placement: 'bottom',
        sanitize: false,
        trigger: 'focus'
    })
}


function initSubmenuSwitcher() {
    $('.submenu-switcher').change(function (e) {
        e.preventDefault();

        let selected = $(this).find(":selected");
        window.location.href = selected.data('route');
    });
}


/**
 * Entity Note toggle support
 */
function initEntityNoteToggle() {
    $('.entity-note-toggle').on('click', function() {
        let id = $(this).data('short');
        $('#' + id + "-show").toggle();
        $('#' + id + "-hide").toggle();
    });
}

function initDialogs() {
    $('[data-toggle="dialog"]').click(function (e) {
        e.preventDefault();

        let target = $(this).data('target');
        target = document.getElementById(target);
        target.showModal();

        target.addEventListener('click', function (event) {
            let rect = target.getBoundingClientRect();
            let isInDialog=(rect.top <= event.clientY && event.clientY <= rect.top + rect.height
                && rect.left <= event.clientX && event.clientX <= rect.left + rect.width);
            if (!isInDialog && event.target.tagName === 'DIALOG') {
                target.close();
            }
        });
    });
    $('[data-toggle="dialog-ajax"]').click(function (e) {
        e.preventDefault();

        let target = $(this).data('target');
        let url = $(this).data('url');
        target = document.getElementById(target);
        target.showModal();

        target.addEventListener('click', function (event) {
            let rect = target.getBoundingClientRect();
            let isInDialog=(rect.top <= event.clientY && event.clientY <= rect.top + rect.height
                && rect.left <= event.clientX && event.clientX <= rect.left + rect.width);
            if (!isInDialog && event.target.tagName === 'DIALOG') {
                target.close();
            }
        });

        $.ajax({
            url: url
        }).done(function (success) {
            $(target).html(success).show();

            $('.btn-manage-perm').click(function (e) {
                e.preventDefault();
                target.close();
                let permTarget = $(this).data('target');
                $(permTarget).click();
            });

            // We should move this to a custom event handler?
            $('#quick-privacy-select').change(function () {
                let toggleUrl = $(this).data('url');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: toggleUrl,
                    type: 'POST'
                }).done( function (success) {
                    window.showToast(success.toast);
                    if (!success.status) {
                        $('body').addClass('kanka-entity-private');
                    } else {
                        $('body').removeClass('kanka-entity-private');
                    }
                    //target.close();
                });
            });
        });
    });
}


// Splitting off the js files into logical blocks
require('./helpers');
require('./keyboard');
require('./crud');
require('./calendar');
require('./search');
require('./notification');
require('./quick-creator');
//require('./tutorial')
require('./datagrids');
require('./quick-links');
require('./members');
require('./campaign');
require('./clipboard');
require('./toast');
require('./sidebar');
require('./banner');
require('./timeline');
require('./vendor');
require('./ads');
