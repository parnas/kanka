var n;$(document).ready(function(){$("#newsletter-api").length===1&&o()});function o(){n=$("#newsletter-api").val(),s($('input[name="mail_release"]'))}function s(t){$(t).change(function(){let a=this.name,e={};e[a]=this.checked?1:0,$.post(n,e).done(function(i){window.showToast(i.message)})})}