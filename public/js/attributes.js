/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/tributejs/dist/tribute.min.js":
/*!****************************************************!*\
  !*** ./node_modules/tributejs/dist/tribute.min.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

!function(e,t){ true?module.exports=t():undefined}(this,(function(){"use strict";function e(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function t(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function n(e,n,i){return n&&t(e.prototype,n),i&&t(e,i),e}function i(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){if(!(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e)))return;var n=[],i=!0,r=!1,o=void 0;try{for(var u,l=e[Symbol.iterator]();!(i=(u=l.next()).done)&&(n.push(u.value),!t||n.length!==t);i=!0);}catch(e){r=!0,o=e}finally{try{i||null==l.return||l.return()}finally{if(r)throw o}}return n}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}()}if(Array.prototype.find||(Array.prototype.find=function(e){if(null===this)throw new TypeError("Array.prototype.find called on null or undefined");if("function"!=typeof e)throw new TypeError("predicate must be a function");for(var t,n=Object(this),i=n.length>>>0,r=arguments[1],o=0;o<i;o++)if(t=n[o],e.call(r,t,o,n))return t}),window&&"function"!=typeof window.CustomEvent){var r=function(e,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var n=document.createEvent("CustomEvent");return n.initCustomEvent(e,t.bubbles,t.cancelable,t.detail),n};void 0!==window.Event&&(r.prototype=window.Event.prototype),window.CustomEvent=r}var o=function(){function t(n){e(this,t),this.tribute=n,this.tribute.events=this}return n(t,[{key:"bind",value:function(e){e.boundKeydown=this.keydown.bind(e,this),e.boundKeyup=this.keyup.bind(e,this),e.boundInput=this.input.bind(e,this),e.addEventListener("keydown",e.boundKeydown,!1),e.addEventListener("keyup",e.boundKeyup,!1),e.addEventListener("input",e.boundInput,!1)}},{key:"unbind",value:function(e){e.removeEventListener("keydown",e.boundKeydown,!1),e.removeEventListener("keyup",e.boundKeyup,!1),e.removeEventListener("input",e.boundInput,!1),delete e.boundKeydown,delete e.boundKeyup,delete e.boundInput}},{key:"keydown",value:function(e,n){e.shouldDeactivate(n)&&(e.tribute.isActive=!1,e.tribute.hideMenu());var i=this;e.commandEvent=!1,t.keys().forEach((function(t){t.key===n.keyCode&&(e.commandEvent=!0,e.callbacks()[t.value.toLowerCase()](n,i))}))}},{key:"input",value:function(e,t){e.inputEvent=!0,e.keyup.call(this,e,t)}},{key:"click",value:function(e,t){var n=e.tribute;if(n.menu&&n.menu.contains(t.target)){var i=t.target;for(t.preventDefault(),t.stopPropagation();"li"!==i.nodeName.toLowerCase();)if(!(i=i.parentNode)||i===n.menu)throw new Error("cannot find the <li> container for the click");n.selectItemAtIndex(i.getAttribute("data-index"),t),n.hideMenu()}else n.current.element&&!n.current.externalTrigger&&(n.current.externalTrigger=!1,setTimeout((function(){return n.hideMenu()})))}},{key:"keyup",value:function(e,t){if(e.inputEvent&&(e.inputEvent=!1),e.updateSelection(this),27!==t.keyCode){if(!e.tribute.allowSpaces&&e.tribute.hasTrailingSpace)return e.tribute.hasTrailingSpace=!1,e.commandEvent=!0,void e.callbacks().space(t,this);if(!e.tribute.isActive)if(e.tribute.autocompleteMode)e.callbacks().triggerChar(t,this,"");else{var n=e.getKeyCode(e,this,t);if(isNaN(n)||!n)return;var i=e.tribute.triggers().find((function(e){return e.charCodeAt(0)===n}));void 0!==i&&e.callbacks().triggerChar(t,this,i)}e.tribute.current.mentionText.length<e.tribute.current.collection.menuShowMinLength||((e.tribute.current.trigger||e.tribute.autocompleteMode)&&!1===e.commandEvent||e.tribute.isActive&&8===t.keyCode)&&e.tribute.showMenuFor(this,!0)}}},{key:"shouldDeactivate",value:function(e){if(!this.tribute.isActive)return!1;if(0===this.tribute.current.mentionText.length){var n=!1;return t.keys().forEach((function(t){e.keyCode===t.key&&(n=!0)})),!n}return!1}},{key:"getKeyCode",value:function(e,t,n){var i=e.tribute,r=i.range.getTriggerInfo(!1,i.hasTrailingSpace,!0,i.allowSpaces,i.autocompleteMode);return!!r&&r.mentionTriggerChar.charCodeAt(0)}},{key:"updateSelection",value:function(e){this.tribute.current.element=e;var t=this.tribute.range.getTriggerInfo(!1,this.tribute.hasTrailingSpace,!0,this.tribute.allowSpaces,this.tribute.autocompleteMode);t&&(this.tribute.current.selectedPath=t.mentionSelectedPath,this.tribute.current.mentionText=t.mentionText,this.tribute.current.selectedOffset=t.mentionSelectedOffset)}},{key:"callbacks",value:function(){var e=this;return{triggerChar:function(t,n,i){var r=e.tribute;r.current.trigger=i;var o=r.collection.find((function(e){return e.trigger===i}));r.current.collection=o,r.current.mentionText.length>=r.current.collection.menuShowMinLength&&r.inputEvent&&r.showMenuFor(n,!0)},enter:function(t,n){e.tribute.isActive&&e.tribute.current.filteredItems&&(t.preventDefault(),t.stopPropagation(),setTimeout((function(){e.tribute.selectItemAtIndex(e.tribute.menuSelected,t),e.tribute.hideMenu()}),0))},escape:function(t,n){e.tribute.isActive&&(t.preventDefault(),t.stopPropagation(),e.tribute.isActive=!1,e.tribute.hideMenu())},tab:function(t,n){e.callbacks().enter(t,n)},space:function(t,n){e.tribute.isActive&&(e.tribute.spaceSelectsMatch?e.callbacks().enter(t,n):e.tribute.allowSpaces||(t.stopPropagation(),setTimeout((function(){e.tribute.hideMenu(),e.tribute.isActive=!1}),0)))},up:function(t,n){if(e.tribute.isActive&&e.tribute.current.filteredItems){t.preventDefault(),t.stopPropagation();var i=e.tribute.current.filteredItems.length,r=e.tribute.menuSelected;i>r&&r>0?(e.tribute.menuSelected--,e.setActiveLi()):0===r&&(e.tribute.menuSelected=i-1,e.setActiveLi(),e.tribute.menu.scrollTop=e.tribute.menu.scrollHeight)}},down:function(t,n){if(e.tribute.isActive&&e.tribute.current.filteredItems){t.preventDefault(),t.stopPropagation();var i=e.tribute.current.filteredItems.length-1,r=e.tribute.menuSelected;i>r?(e.tribute.menuSelected++,e.setActiveLi()):i===r&&(e.tribute.menuSelected=0,e.setActiveLi(),e.tribute.menu.scrollTop=0)}},delete:function(t,n){e.tribute.isActive&&e.tribute.current.mentionText.length<1?e.tribute.hideMenu():e.tribute.isActive&&e.tribute.showMenuFor(n)}}}},{key:"setActiveLi",value:function(e){var t=this.tribute.menu.querySelectorAll("li"),n=t.length>>>0;e&&(this.tribute.menuSelected=parseInt(e));for(var i=0;i<n;i++){var r=t[i];if(i===this.tribute.menuSelected){r.classList.add(this.tribute.current.collection.selectClass);var o=r.getBoundingClientRect(),u=this.tribute.menu.getBoundingClientRect();if(o.bottom>u.bottom){var l=o.bottom-u.bottom;this.tribute.menu.scrollTop+=l}else if(o.top<u.top){var s=u.top-o.top;this.tribute.menu.scrollTop-=s}}else r.classList.remove(this.tribute.current.collection.selectClass)}}},{key:"getFullHeight",value:function(e,t){var n=e.getBoundingClientRect().height;if(t){var i=e.currentStyle||window.getComputedStyle(e);return n+parseFloat(i.marginTop)+parseFloat(i.marginBottom)}return n}}],[{key:"keys",value:function(){return[{key:9,value:"TAB"},{key:8,value:"DELETE"},{key:13,value:"ENTER"},{key:27,value:"ESCAPE"},{key:32,value:"SPACE"},{key:38,value:"UP"},{key:40,value:"DOWN"}]}}]),t}(),u=function(){function t(n){e(this,t),this.tribute=n,this.tribute.menuEvents=this,this.menu=this.tribute.menu}return n(t,[{key:"bind",value:function(e){var t=this;this.menuClickEvent=this.tribute.events.click.bind(null,this),this.menuContainerScrollEvent=this.debounce((function(){t.tribute.isActive&&t.tribute.showMenuFor(t.tribute.current.element,!1)}),300,!1),this.windowResizeEvent=this.debounce((function(){t.tribute.isActive&&t.tribute.range.positionMenuAtCaret(!0)}),300,!1),this.tribute.range.getDocument().addEventListener("MSPointerDown",this.menuClickEvent,!1),this.tribute.range.getDocument().addEventListener("mousedown",this.menuClickEvent,!1),window.addEventListener("resize",this.windowResizeEvent),this.menuContainer?this.menuContainer.addEventListener("scroll",this.menuContainerScrollEvent,!1):window.addEventListener("scroll",this.menuContainerScrollEvent)}},{key:"unbind",value:function(e){this.tribute.range.getDocument().removeEventListener("mousedown",this.menuClickEvent,!1),this.tribute.range.getDocument().removeEventListener("MSPointerDown",this.menuClickEvent,!1),window.removeEventListener("resize",this.windowResizeEvent),this.menuContainer?this.menuContainer.removeEventListener("scroll",this.menuContainerScrollEvent,!1):window.removeEventListener("scroll",this.menuContainerScrollEvent)}},{key:"debounce",value:function(e,t,n){var i,r=arguments,o=this;return function(){var u=o,l=r,s=n&&!i;clearTimeout(i),i=setTimeout((function(){i=null,n||e.apply(u,l)}),t),s&&e.apply(u,l)}}}]),t}(),l=function(){function t(n){e(this,t),this.tribute=n,this.tribute.range=this}return n(t,[{key:"getDocument",value:function(){var e;return this.tribute.current.collection&&(e=this.tribute.current.collection.iframe),e?e.contentWindow.document:document}},{key:"positionMenuAtCaret",value:function(e){var t,n=this,i=this.tribute.current,r=this.getTriggerInfo(!1,this.tribute.hasTrailingSpace,!0,this.tribute.allowSpaces,this.tribute.autocompleteMode);if(void 0!==r){if(!this.tribute.positionMenu)return void(this.tribute.menu.style.cssText="display: block;");t=this.isContentEditable(i.element)?this.getContentEditableCaretPosition(r.mentionPosition):this.getTextAreaOrInputUnderlinePosition(this.tribute.current.element,r.mentionPosition),this.tribute.menu.style.cssText="top: ".concat(t.top,"px;\n                                     left: ").concat(t.left,"px;\n                                     right: ").concat(t.right,"px;\n                                     bottom: ").concat(t.bottom,"px;\n                                     position: absolute;\n                                     display: block;"),"auto"===t.left&&(this.tribute.menu.style.left="auto"),"auto"===t.top&&(this.tribute.menu.style.top="auto"),e&&this.scrollIntoView(),window.setTimeout((function(){var i={width:n.tribute.menu.offsetWidth,height:n.tribute.menu.offsetHeight},r=n.isMenuOffScreen(t,i),o=window.innerWidth>i.width&&(r.left||r.right),u=window.innerHeight>i.height&&(r.top||r.bottom);(o||u)&&(n.tribute.menu.style.cssText="display: none",n.positionMenuAtCaret(e))}),0)}else this.tribute.menu.style.cssText="display: none"}},{key:"selectElement",value:function(e,t,n){var i,r=e;if(t)for(var o=0;o<t.length;o++){if(void 0===(r=r.childNodes[t[o]]))return;for(;r.length<n;)n-=r.length,r=r.nextSibling;0!==r.childNodes.length||r.length||(r=r.previousSibling)}var u=this.getWindowSelection();(i=this.getDocument().createRange()).setStart(r,n),i.setEnd(r,n),i.collapse(!0);try{u.removeAllRanges()}catch(e){}u.addRange(i),e.focus()}},{key:"replaceTriggerText",value:function(e,t,n,i,r){var o=this.getTriggerInfo(!0,n,t,this.tribute.allowSpaces,this.tribute.autocompleteMode);if(void 0!==o){var u=this.tribute.current,l=new CustomEvent("tribute-replaced",{detail:{item:r,instance:u,context:o,event:i}});if(this.isContentEditable(u.element)){e+="string"==typeof this.tribute.replaceTextSuffix?this.tribute.replaceTextSuffix:" ";var s=o.mentionPosition+o.mentionText.length;this.tribute.autocompleteMode||(s+=o.mentionTriggerChar.length),this.pasteHtml(e,o.mentionPosition,s)}else{var a=this.tribute.current.element,c="string"==typeof this.tribute.replaceTextSuffix?this.tribute.replaceTextSuffix:" ";e+=c;var h=o.mentionPosition,d=o.mentionPosition+o.mentionText.length+c.length;this.tribute.autocompleteMode||(d+=o.mentionTriggerChar.length-1),a.value=a.value.substring(0,h)+e+a.value.substring(d,a.value.length),a.selectionStart=h+e.length,a.selectionEnd=h+e.length}u.element.dispatchEvent(new CustomEvent("input",{bubbles:!0})),u.element.dispatchEvent(l)}}},{key:"pasteHtml",value:function(e,t,n){var i,r;r=this.getWindowSelection(),(i=this.getDocument().createRange()).setStart(r.anchorNode,t),i.setEnd(r.anchorNode,n),i.deleteContents();var o=this.getDocument().createElement("div");o.innerHTML=e;for(var u,l,s=this.getDocument().createDocumentFragment();u=o.firstChild;)l=s.appendChild(u);i.insertNode(s),l&&((i=i.cloneRange()).setStartAfter(l),i.collapse(!0),r.removeAllRanges(),r.addRange(i))}},{key:"getWindowSelection",value:function(){return this.tribute.collection.iframe?this.tribute.collection.iframe.contentWindow.getSelection():window.getSelection()}},{key:"getNodePositionInParent",value:function(e){if(null===e.parentNode)return 0;for(var t=0;t<e.parentNode.childNodes.length;t++){if(e.parentNode.childNodes[t]===e)return t}}},{key:"getContentEditableSelectedPath",value:function(e){var t=this.getWindowSelection(),n=t.anchorNode,i=[];if(null!=n){for(var r,o=n.contentEditable;null!==n&&"true"!==o;)r=this.getNodePositionInParent(n),i.push(r),null!==(n=n.parentNode)&&(o=n.contentEditable);return i.reverse(),{selected:n,path:i,offset:t.getRangeAt(0).startOffset}}}},{key:"getTextPrecedingCurrentSelection",value:function(){var e=this.tribute.current,t="";if(this.isContentEditable(e.element)){var n=this.getWindowSelection().anchorNode;if(null!=n){var i=n.textContent,r=this.getWindowSelection().getRangeAt(0).startOffset;i&&r>=0&&(t=i.substring(0,r))}}else{var o=this.tribute.current.element;if(o){var u=o.selectionStart;o.value&&u>=0&&(t=o.value.substring(0,u))}}return t}},{key:"getLastWordInText",value:function(e){var t=(e=e.replace(/\u00A0/g," ")).split(/\s+/);return t[t.length-1].trim()}},{key:"getTriggerInfo",value:function(e,t,n,i,r){var o,u,l,s=this,a=this.tribute.current;if(this.isContentEditable(a.element)){var c=this.getContentEditableSelectedPath(a);c&&(o=c.selected,u=c.path,l=c.offset)}else o=this.tribute.current.element;var h=this.getTextPrecedingCurrentSelection(),d=this.getLastWordInText(h);if(r)return{mentionPosition:h.length-d.length,mentionText:d,mentionSelectedElement:o,mentionSelectedPath:u,mentionSelectedOffset:l};if(null!=h){var f,m=-1;if(this.tribute.collection.forEach((function(e){var t=e.trigger,i=e.requireLeadingSpace?s.lastIndexWithLeadingSpace(h,t):h.lastIndexOf(t);i>m&&(m=i,f=t,n=e.requireLeadingSpace)})),m>=0&&(0===m||!n||/[\xA0\s]/g.test(h.substring(m-1,m)))){var p=h.substring(m+f.length,h.length);f=h.substring(m,m+f.length);var v=p.substring(0,1),g=p.length>0&&(" "===v||" "===v);t&&(p=p.trim());var b=i?/[^\S ]/g:/[\xA0\s]/g;if(this.tribute.hasTrailingSpace=b.test(p),!g&&(e||!b.test(p)))return{mentionPosition:m,mentionText:p,mentionSelectedElement:o,mentionSelectedPath:u,mentionSelectedOffset:l,mentionTriggerChar:f}}}}},{key:"lastIndexWithLeadingSpace",value:function(e,t){for(var n=e.split("").reverse().join(""),i=-1,r=0,o=e.length;r<o;r++){for(var u=r===e.length-1,l=/\s/.test(n[r+1]),s=!0,a=t.length-1;a>=0;a--)if(t[a]!==n[r-a]){s=!1;break}if(s&&(u||l)){i=e.length-1-r;break}}return i}},{key:"isContentEditable",value:function(e){return"INPUT"!==e.nodeName&&"TEXTAREA"!==e.nodeName}},{key:"isMenuOffScreen",value:function(e,t){var n=window.innerWidth,i=window.innerHeight,r=document.documentElement,o=(window.pageXOffset||r.scrollLeft)-(r.clientLeft||0),u=(window.pageYOffset||r.scrollTop)-(r.clientTop||0),l="number"==typeof e.top?e.top:u+i-e.bottom-t.height,s="number"==typeof e.right?e.right:e.left+t.width,a="number"==typeof e.bottom?e.bottom:e.top+t.height,c="number"==typeof e.left?e.left:o+n-e.right-t.width;return{top:l<Math.floor(u),right:s>Math.ceil(o+n),bottom:a>Math.ceil(u+i),left:c<Math.floor(o)}}},{key:"getMenuDimensions",value:function(){var e={width:null,height:null};return this.tribute.menu.style.cssText="top: 0px;\n                                 left: 0px;\n                                 position: fixed;\n                                 display: block;\n                                 visibility; hidden;",e.width=this.tribute.menu.offsetWidth,e.height=this.tribute.menu.offsetHeight,this.tribute.menu.style.cssText="display: none;",e}},{key:"getTextAreaOrInputUnderlinePosition",value:function(e,t,n){var i=null!==window.mozInnerScreenX,r=this.getDocument().createElement("div");r.id="input-textarea-caret-position-mirror-div",this.getDocument().body.appendChild(r);var o=r.style,u=window.getComputedStyle?getComputedStyle(e):e.currentStyle;o.whiteSpace="pre-wrap","INPUT"!==e.nodeName&&(o.wordWrap="break-word"),o.position="absolute",o.visibility="hidden",["direction","boxSizing","width","height","overflowX","overflowY","borderTopWidth","borderRightWidth","borderBottomWidth","borderLeftWidth","paddingTop","paddingRight","paddingBottom","paddingLeft","fontStyle","fontVariant","fontWeight","fontStretch","fontSize","fontSizeAdjust","lineHeight","fontFamily","textAlign","textTransform","textIndent","textDecoration","letterSpacing","wordSpacing"].forEach((function(e){o[e]=u[e]})),i?(o.width="".concat(parseInt(u.width)-2,"px"),e.scrollHeight>parseInt(u.height)&&(o.overflowY="scroll")):o.overflow="hidden",r.textContent=e.value.substring(0,t),"INPUT"===e.nodeName&&(r.textContent=r.textContent.replace(/\s/g," "));var l=this.getDocument().createElement("span");l.textContent=e.value.substring(t)||".",r.appendChild(l);var s=e.getBoundingClientRect(),a=document.documentElement,c=(window.pageXOffset||a.scrollLeft)-(a.clientLeft||0),h=(window.pageYOffset||a.scrollTop)-(a.clientTop||0),d=0,f=0;this.menuContainerIsBody&&(d=s.top,f=s.left);var m={top:d+h+l.offsetTop+parseInt(u.borderTopWidth)+parseInt(u.fontSize)-e.scrollTop,left:f+c+l.offsetLeft+parseInt(u.borderLeftWidth)},p=window.innerWidth,v=window.innerHeight,g=this.getMenuDimensions(),b=this.isMenuOffScreen(m,g);b.right&&(m.right=p-m.left,m.left="auto");var y=this.tribute.menuContainer?this.tribute.menuContainer.offsetHeight:this.getDocument().body.offsetHeight;if(b.bottom){var w=y-(v-(this.tribute.menuContainer?this.tribute.menuContainer.getBoundingClientRect():this.getDocument().body.getBoundingClientRect()).top);m.bottom=w+(v-s.top-l.offsetTop),m.top="auto"}return(b=this.isMenuOffScreen(m,g)).left&&(m.left=p>g.width?c+p-g.width:c,delete m.right),b.top&&(m.top=v>g.height?h+v-g.height:h,delete m.bottom),this.getDocument().body.removeChild(r),m}},{key:"getContentEditableCaretPosition",value:function(e){var t,n=this.getWindowSelection();(t=this.getDocument().createRange()).setStart(n.anchorNode,e),t.setEnd(n.anchorNode,e),t.collapse(!1);var i=t.getBoundingClientRect(),r=document.documentElement,o=(window.pageXOffset||r.scrollLeft)-(r.clientLeft||0),u=(window.pageYOffset||r.scrollTop)-(r.clientTop||0),l={left:i.left+o,top:i.top+i.height+u},s=window.innerWidth,a=window.innerHeight,c=this.getMenuDimensions(),h=this.isMenuOffScreen(l,c);h.right&&(l.left="auto",l.right=s-i.left-o);var d=this.tribute.menuContainer?this.tribute.menuContainer.offsetHeight:this.getDocument().body.offsetHeight;if(h.bottom){var f=d-(a-(this.tribute.menuContainer?this.tribute.menuContainer.getBoundingClientRect():this.getDocument().body.getBoundingClientRect()).top);l.top="auto",l.bottom=f+(a-i.top)}return(h=this.isMenuOffScreen(l,c)).left&&(l.left=s>c.width?o+s-c.width:o,delete l.right),h.top&&(l.top=a>c.height?u+a-c.height:u,delete l.bottom),this.menuContainerIsBody||(l.left=l.left?l.left-this.tribute.menuContainer.offsetLeft:l.left,l.top=l.top?l.top-this.tribute.menuContainer.offsetTop:l.top),l}},{key:"scrollIntoView",value:function(e){var t,n=this.menu;if(void 0!==n){for(;void 0===t||0===t.height;)if(0===(t=n.getBoundingClientRect()).height&&(void 0===(n=n.childNodes[0])||!n.getBoundingClientRect))return;var i=t.top,r=i+t.height;if(i<0)window.scrollTo(0,window.pageYOffset+t.top-20);else if(r>window.innerHeight){var o=window.pageYOffset+t.top-20;o-window.pageYOffset>100&&(o=window.pageYOffset+100);var u=window.pageYOffset-(window.innerHeight-r);u>o&&(u=o),window.scrollTo(0,u)}}}},{key:"menuContainerIsBody",get:function(){return this.tribute.menuContainer===document.body||!this.tribute.menuContainer}}]),t}(),s=function(){function t(n){e(this,t),this.tribute=n,this.tribute.search=this}return n(t,[{key:"simpleFilter",value:function(e,t){var n=this;return t.filter((function(t){return n.test(e,t)}))}},{key:"test",value:function(e,t){return null!==this.match(e,t)}},{key:"match",value:function(e,t,n){n=n||{};t.length;var i=n.pre||"",r=n.post||"",o=n.caseSensitive&&t||t.toLowerCase();if(n.skip)return{rendered:t,score:0};e=n.caseSensitive&&e||e.toLowerCase();var u=this.traverse(o,e,0,0,[]);return u?{rendered:this.render(t,u.cache,i,r),score:u.score}:null}},{key:"traverse",value:function(e,t,n,i,r){if(t.length===i)return{score:this.calculateScore(r),cache:r.slice()};if(!(e.length===n||t.length-i>e.length-n)){for(var o,u,l=t[i],s=e.indexOf(l,n);s>-1;){if(r.push(s),u=this.traverse(e,t,s+1,i+1,r),r.pop(),!u)return o;(!o||o.score<u.score)&&(o=u),s=e.indexOf(l,s+1)}return o}}},{key:"calculateScore",value:function(e){var t=0,n=1;return e.forEach((function(i,r){r>0&&(e[r-1]+1===i?n+=n+1:n=1),t+=n})),t}},{key:"render",value:function(e,t,n,i){var r=e.substring(0,t[0]);return t.forEach((function(o,u){r+=n+e[o]+i+e.substring(o+1,t[u+1]?t[u+1]:e.length)})),r}},{key:"filter",value:function(e,t,n){var i=this;return n=n||{},t.reduce((function(t,r,o,u){var l=r;n.extract&&((l=n.extract(r))||(l=""));var s=i.match(e,l,n);return null!=s&&(t[t.length]={string:s.rendered,score:s.score,index:o,original:r}),t}),[]).sort((function(e,t){var n=t.score-e.score;return n||e.index-t.index}))}}]),t}();return function(){function t(n){var i,r=this,a=n.values,c=void 0===a?null:a,h=n.iframe,d=void 0===h?null:h,f=n.selectClass,m=void 0===f?"highlight":f,p=n.containerClass,v=void 0===p?"tribute-container":p,g=n.itemClass,b=void 0===g?"":g,y=n.trigger,w=void 0===y?"@":y,T=n.autocompleteMode,C=void 0!==T&&T,S=n.selectTemplate,E=void 0===S?null:S,k=n.menuItemTemplate,x=void 0===k?null:k,M=n.lookup,A=void 0===M?"key":M,L=n.fillAttr,I=void 0===L?"value":L,N=n.collection,O=void 0===N?null:N,D=n.menuContainer,P=void 0===D?null:D,R=n.noMatchTemplate,W=void 0===R?null:R,H=n.requireLeadingSpace,B=void 0===H||H,F=n.allowSpaces,_=void 0!==F&&F,j=n.replaceTextSuffix,Y=void 0===j?null:j,z=n.positionMenu,K=void 0===z||z,q=n.spaceSelectsMatch,U=void 0!==q&&q,X=n.searchOpts,Q=void 0===X?{}:X,V=n.menuItemLimit,G=void 0===V?null:V,J=n.menuShowMinLength,Z=void 0===J?0:J;if(e(this,t),this.autocompleteMode=C,this.menuSelected=0,this.current={},this.inputEvent=!1,this.isActive=!1,this.menuContainer=P,this.allowSpaces=_,this.replaceTextSuffix=Y,this.positionMenu=K,this.hasTrailingSpace=!1,this.spaceSelectsMatch=U,this.autocompleteMode&&(w="",_=!1),c)this.collection=[{trigger:w,iframe:d,selectClass:m,containerClass:v,itemClass:b,selectTemplate:(E||t.defaultSelectTemplate).bind(this),menuItemTemplate:(x||t.defaultMenuItemTemplate).bind(this),noMatchTemplate:(i=W,"string"==typeof i?""===i.trim()?null:i:"function"==typeof i?i.bind(r):W||function(){return"<li>No Match Found!</li>"}.bind(r)),lookup:A,fillAttr:I,values:c,requireLeadingSpace:B,searchOpts:Q,menuItemLimit:G,menuShowMinLength:Z}];else{if(!O)throw new Error("[Tribute] No collection specified.");this.autocompleteMode&&console.warn("Tribute in autocomplete mode does not work for collections"),this.collection=O.map((function(e){return{trigger:e.trigger||w,iframe:e.iframe||d,selectClass:e.selectClass||m,containerClass:e.containerClass||v,itemClass:e.itemClass||b,selectTemplate:(e.selectTemplate||t.defaultSelectTemplate).bind(r),menuItemTemplate:(e.menuItemTemplate||t.defaultMenuItemTemplate).bind(r),noMatchTemplate:function(e){return"string"==typeof e?""===e.trim()?null:e:"function"==typeof e?e.bind(r):W||function(){return"<li>No Match Found!</li>"}.bind(r)}(W),lookup:e.lookup||A,fillAttr:e.fillAttr||I,values:e.values,requireLeadingSpace:e.requireLeadingSpace,searchOpts:e.searchOpts||Q,menuItemLimit:e.menuItemLimit||G,menuShowMinLength:e.menuShowMinLength||Z}}))}new l(this),new o(this),new u(this),new s(this)}return n(t,[{key:"triggers",value:function(){return this.collection.map((function(e){return e.trigger}))}},{key:"attach",value:function(e){if(!e)throw new Error("[Tribute] Must pass in a DOM node or NodeList.");if("undefined"!=typeof jQuery&&e instanceof jQuery&&(e=e.get()),e.constructor===NodeList||e.constructor===HTMLCollection||e.constructor===Array)for(var t=e.length,n=0;n<t;++n)this._attach(e[n]);else this._attach(e)}},{key:"_attach",value:function(e){e.hasAttribute("data-tribute")&&console.warn("Tribute was already bound to "+e.nodeName),this.ensureEditable(e),this.events.bind(e),e.setAttribute("data-tribute",!0)}},{key:"ensureEditable",value:function(e){if(-1===t.inputTypes().indexOf(e.nodeName)){if(!e.contentEditable)throw new Error("[Tribute] Cannot bind to "+e.nodeName);e.contentEditable=!0}}},{key:"createMenu",value:function(e){var t=this.range.getDocument().createElement("div"),n=this.range.getDocument().createElement("ul");return t.className=e,t.appendChild(n),this.menuContainer?this.menuContainer.appendChild(t):this.range.getDocument().body.appendChild(t)}},{key:"showMenuFor",value:function(e,t){var n=this;if(!this.isActive||this.current.element!==e||this.current.mentionText!==this.currentMentionTextSnapshot){this.currentMentionTextSnapshot=this.current.mentionText,this.menu||(this.menu=this.createMenu(this.current.collection.containerClass),e.tributeMenu=this.menu,this.menuEvents.bind(this.menu)),this.isActive=!0,this.menuSelected=0,this.current.mentionText||(this.current.mentionText="");var r=function(e){if(n.isActive){var r=n.search.filter(n.current.mentionText,e,{pre:n.current.collection.searchOpts.pre||"<span>",post:n.current.collection.searchOpts.post||"</span>",skip:n.current.collection.searchOpts.skip,extract:function(e){if("string"==typeof n.current.collection.lookup)return e[n.current.collection.lookup];if("function"==typeof n.current.collection.lookup)return n.current.collection.lookup(e,n.current.mentionText);throw new Error("Invalid lookup attribute, lookup must be string or function.")}});n.current.collection.menuItemLimit&&(r=r.slice(0,n.current.collection.menuItemLimit)),n.current.filteredItems=r;var o=n.menu.querySelector("ul");if(n.range.positionMenuAtCaret(t),!r.length){var u=new CustomEvent("tribute-no-match",{detail:n.menu});return n.current.element.dispatchEvent(u),void("function"==typeof n.current.collection.noMatchTemplate&&!n.current.collection.noMatchTemplate()||!n.current.collection.noMatchTemplate?n.hideMenu():"function"==typeof n.current.collection.noMatchTemplate?o.innerHTML=n.current.collection.noMatchTemplate():o.innerHTML=n.current.collection.noMatchTemplate)}o.innerHTML="";var l=n.range.getDocument().createDocumentFragment();r.forEach((function(e,t){var r=n.range.getDocument().createElement("li");r.setAttribute("data-index",t),r.className=n.current.collection.itemClass,r.addEventListener("mousemove",(function(e){var t=i(n._findLiTarget(e.target),2),r=(t[0],t[1]);0!==e.movementY&&n.events.setActiveLi(r)})),n.menuSelected===t&&r.classList.add(n.current.collection.selectClass),r.innerHTML=n.current.collection.menuItemTemplate(e),l.appendChild(r)})),o.appendChild(l)}};"function"==typeof this.current.collection.values?this.current.collection.values(this.current.mentionText,r):r(this.current.collection.values)}}},{key:"_findLiTarget",value:function(e){if(!e)return[];var t=e.getAttribute("data-index");return t?[e,t]:this._findLiTarget(e.parentNode)}},{key:"showMenuForCollection",value:function(e,t){e!==document.activeElement&&this.placeCaretAtEnd(e),this.current.collection=this.collection[t||0],this.current.externalTrigger=!0,this.current.element=e,e.isContentEditable?this.insertTextAtCursor(this.current.collection.trigger):this.insertAtCaret(e,this.current.collection.trigger),this.showMenuFor(e)}},{key:"placeCaretAtEnd",value:function(e){if(e.focus(),void 0!==window.getSelection&&void 0!==document.createRange){var t=document.createRange();t.selectNodeContents(e),t.collapse(!1);var n=window.getSelection();n.removeAllRanges(),n.addRange(t)}else if(void 0!==document.body.createTextRange){var i=document.body.createTextRange();i.moveToElementText(e),i.collapse(!1),i.select()}}},{key:"insertTextAtCursor",value:function(e){var t,n;(n=(t=window.getSelection()).getRangeAt(0)).deleteContents();var i=document.createTextNode(e);n.insertNode(i),n.selectNodeContents(i),n.collapse(!1),t.removeAllRanges(),t.addRange(n)}},{key:"insertAtCaret",value:function(e,t){var n=e.scrollTop,i=e.selectionStart,r=e.value.substring(0,i),o=e.value.substring(e.selectionEnd,e.value.length);e.value=r+t+o,i+=t.length,e.selectionStart=i,e.selectionEnd=i,e.focus(),e.scrollTop=n}},{key:"hideMenu",value:function(){this.menu&&(this.menu.style.cssText="display: none;",this.isActive=!1,this.menuSelected=0,this.current={})}},{key:"selectItemAtIndex",value:function(e,t){if("number"==typeof(e=parseInt(e))&&!isNaN(e)){var n=this.current.filteredItems[e],i=this.current.collection.selectTemplate(n);null!==i&&this.replaceText(i,t,n)}}},{key:"replaceText",value:function(e,t,n){this.range.replaceTriggerText(e,!0,!0,t,n)}},{key:"_append",value:function(e,t,n){if("function"==typeof e.values)throw new Error("Unable to append to values, as it is a function.");e.values=n?t:e.values.concat(t)}},{key:"append",value:function(e,t,n){var i=parseInt(e);if("number"!=typeof i)throw new Error("please provide an index for the collection to update.");var r=this.collection[i];this._append(r,t,n)}},{key:"appendCurrent",value:function(e,t){if(!this.isActive)throw new Error("No active state. Please use append instead and pass an index.");this._append(this.current.collection,e,t)}},{key:"detach",value:function(e){if(!e)throw new Error("[Tribute] Must pass in a DOM node or NodeList.");if("undefined"!=typeof jQuery&&e instanceof jQuery&&(e=e.get()),e.constructor===NodeList||e.constructor===HTMLCollection||e.constructor===Array)for(var t=e.length,n=0;n<t;++n)this._detach(e[n]);else this._detach(e)}},{key:"_detach",value:function(e){var t=this;this.events.unbind(e),e.tributeMenu&&this.menuEvents.unbind(e.tributeMenu),setTimeout((function(){e.removeAttribute("data-tribute"),t.isActive=!1,e.tributeMenu&&e.tributeMenu.remove()}))}},{key:"isActive",get:function(){return this._isActive},set:function(e){if(this._isActive!=e&&(this._isActive=e,this.current.element)){var t=new CustomEvent("tribute-active-".concat(e));this.current.element.dispatchEvent(t)}}}],[{key:"defaultSelectTemplate",value:function(e){return void 0===e?"".concat(this.current.collection.trigger).concat(this.current.mentionText):this.range.isContentEditable(this.current.element)?'<span class="tribute-mention">'+(this.current.collection.trigger+e.original[this.current.collection.fillAttr])+"</span>":this.current.collection.trigger+e.original[this.current.collection.fillAttr]}},{key:"defaultMenuItemTemplate",value:function(e){return e.string}},{key:"inputTypes",value:function(){return["TEXTAREA","INPUT"]}}]),t}()}));
//# sourceMappingURL=tribute.min.js.map


/***/ }),

/***/ "./resources/assets/js/attributes.js":
/*!*******************************************!*\
  !*** ./resources/assets/js/attributes.js ***!
  \*******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _mention__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./mention */ "./resources/assets/js/mention.js");
/**
 * When adding a new attribute, we give it a negative id to avoid issues with checkboxes losing information
 * @type {number}
 */
var attribute_id_count = -1000;
var maxFields = false;
var maxFieldAlert;

$(document).ready(function () {
  initLiveAttributes();

  if ($('#add_attribute_target').length === 0) {
    return;
  }

  initAttributeUI();
  var maxConfig = $('[data-max-fields]');

  if (maxConfig.length === 1) {
    maxFields = maxConfig.data('max-fields');
    maxFieldAlert = $('.alert-too-many-fields');
  }
});
/**
 * Initiate on click handles for attribute interface
 */

function initAttributeUI() {
  var target = $('#add_attribute_target');
  initAttributeHandlers();
  $('.add_attribute').click(function (e) {
    e.preventDefault();

    if (maxFields !== false) {
      var fieldCount = $('form :input').length + 4; //console.log('checking', fieldCount, 'vs', maxFields);

      if (fieldCount > maxFields) {
        maxFieldAlert.show();
        return;
      } else {
        maxFieldAlert.hide();
      }
    }

    attribute_id_count -= 1;
    var body = $($(this).data('template')).clone().removeClass('hidden').removeAttr('id');
    var html = body.html().replace(/\$TMP_ID\$/g, attribute_id_count);
    body.html(html).insertBefore(target);
    initAttributeHandlers();
    Object(_mention__WEBPACK_IMPORTED_MODULE_0__["default"])();
    return false;
  }); // Delete all visible attributes

  $('#attributes-delete-all-confirm-submit').click(function (e) {
    e.preventDefault();
    $('#entity-attributes-all .attribute_delete').click();
    $('#attributes-delete-all-confirm').modal('hide');

    if (maxFieldAlert) {
      maxFieldAlert.hide();
    }

    return false;
  });
  $.each($('[data-toggle="private"]'), function () {
    // Add the title first
    if ($(this).hasClass('fa-lock')) {
      $(this).prop('title', $(this).data('private'));
    } else {
      $(this).prop('title', $(this).data('public'));
    }
  });
}
/**
 * This function rebinds the delete on all buttons
 */


function initAttributeHandlers() {
  $('.entity-attributes').sortable({});
  $.each($('.attribute_delete'), function () {
    $(this).unbind('click');
    $(this).on('click', function () {
      $(this).parent().parent().parent().remove();

      if (maxFieldAlert) {
        maxFieldAlert.hide();
      }
    });
  });
  $('[data-toggle="private"]').unbind('click').click(function () {
    if ($(this).hasClass('fa-lock')) {
      // Unlock
      $(this).removeClass('fa-lock').addClass('fa-unlock-alt').prop('title', $(this).data('public'));
      $(this).prev('input:hidden').val("0");
    } else {
      // Lock
      $(this).removeClass('fa-unlock-alt').addClass('fa-lock').prop('title', $(this).data('private'));
      $(this).prev('input:hidden').val("1");
    }
  });
  $('[data-toggle="star"]').unbind('click').click(function () {
    if ($(this).hasClass('far')) {
      // Unlock
      $(this).removeClass('far').addClass('fas').prop('title', $(this).data('entry'));
      $(this).prev('input:hidden').val("1");
    } else {
      // Lock
      $(this).removeClass('fas').addClass('far').prop('title', $(this).data('tab'));
      $(this).prev('input:hidden').val("0");
    }
  }); //window.initSelect2();
}

var liveEditURL, liveEditModal, liveEditCurrentUID;

function initLiveAttributes() {
  var config = $('[name="live-attribute-config"]');

  if (config.length === 0) {
    return;
  }

  liveEditURL = config.data('live');
  liveEditModal = $('#live-attribute-modal');
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  }); // Add the live-edit-parsed attribute to variables to confirm that they are valid

  var uid = 1;
  $.each($('.live-edit'), function (i) {
    $(this).addClass('live-edit-parsed');
    $(this).attr('data-uid', uid);
    uid++;
  });
  $('.live-edit-parsed').unbind('click').click(function (e) {
    //console.log('clicked on live edit parsed');
    var id = $(this).data('id');
    liveEditCurrentUID = $(this).data('uid');
    var url = liveEditURL + '?id=' + id + '&uid=' + $(this).data('uid');
    $.ajax({
      url: url
    }).done(function (result, textStatus, xhr) {
      var params = {};
      liveEditModal.find('.modal-content').html(result);
      liveEditModal.modal(params); //console.log('child', liveEditModal.find('form'));

      liveEditModal.find('form').submit(function (e) {
        e.preventDefault();
        $.ajax({
          method: 'POST',
          context: this,
          url: $(this).attr('action'),
          data: $(this).serialize()
        }).done(function (result) {
          liveEditModal.find('.modal-content').html('');
          liveEditModal.modal('hide');
          var target = $('[data-uid="' + result.uid + '"]'); //console.log('looking for', '[data-uid="' + result.uid + '"]', target);

          target.html(result.value);
          window.showToast(result.success);
        }).fail(function (result, textStatus, xhr) {
          //alert('error! check console logs');
          console.error('live-edit-error', result);
          liveEditModal.find('.modal-content').html('');
          liveEditModal.modal('hide');
        });
        return false;
      });
    });
  });
}

/***/ }),

/***/ "./resources/assets/js/mention.js":
/*!****************************************!*\
  !*** ./resources/assets/js/mention.js ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return dynamicMentions; });
/* harmony import */ var tributejs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tributejs */ "./node_modules/tributejs/dist/tribute.min.js");
/* harmony import */ var tributejs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(tributejs__WEBPACK_IMPORTED_MODULE_0__);

function dynamicMentions() {
  var remoteUrl;
  var fields;
  var SELECTOR = '.kanka-mentions'; //:not(.kanka-mentions-tribute)';

  fields = $(SELECTOR);

  if (fields.length === 0) {
    return;
  }

  remoteUrl = fields.first().data('remote');
  var tribute = new tributejs__WEBPACK_IMPORTED_MODULE_0___default.a({
    values: function values(text, cb) {
      remoteSearch(text, function (users) {
        return cb(users);
      });
    },
    lookup: 'name',
    menuShowMinLength: 3,
    selectTemplate: function selectTemplate(item) {
      return '[' + item.original.model_type + ':' + item.original.id + ']';
    },
    noMatchTemplate: function noMatchTemplate() {
      return null;
    }
  });
  tribute.attach(document.querySelectorAll(SELECTOR)); //$(SELECTOR).addClass('kanka-mentions-tribute');

  function remoteSearch(text, cb) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          var data = JSON.parse(xhr.responseText);
          cb(data);
        } else if (xhr.status === 403) {
          cb([]);
        }
      }
    };

    var fullUrl = remoteUrl + '?q=' + text;
    xhr.open("GET", fullUrl, true);
    xhr.send();
  }
}

/***/ }),

/***/ 7:
/*!**********************************************!*\
  !*** multi ./resources/assets/js/attributes ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/jay/Documents/GitHub/miscellany/resources/assets/js/attributes */"./resources/assets/js/attributes.js");


/***/ })

/******/ });