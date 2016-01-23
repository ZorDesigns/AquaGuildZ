/*! Copyright (c) 2011 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.0.6
 * 
 * Requires: 1.2.2+
 */
(function(a){function d(b){var c=b||window.event,d=[].slice.call(arguments,1),e=0,f=!0,g=0,h=0;return b=a.event.fix(c),b.type="mousewheel",c.wheelDelta&&(e=c.wheelDelta/120),c.detail&&(e=-c.detail/3),h=e,c.axis!==undefined&&c.axis===c.HORIZONTAL_AXIS&&(h=0,g=-1*e),c.wheelDeltaY!==undefined&&(h=c.wheelDeltaY/120),c.wheelDeltaX!==undefined&&(g=-1*c.wheelDeltaX/120),d.unshift(b,e,g,h),(a.event.dispatch||a.event.handle).apply(this,d)}var b=["DOMMouseScroll","mousewheel"];if(a.event.fixHooks)for(var c=b.length;c;)a.event.fixHooks[b[--c]]=a.event.mouseHooks;a.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var a=b.length;a;)this.addEventListener(b[--a],d,!1);else this.onmousewheel=d},teardown:function(){if(this.removeEventListener)for(var a=b.length;a;)this.removeEventListener(b[--a],d,!1);else this.onmousewheel=null}},a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})})(jQuery);$(document).ready(function()
{var delay=5000;$('.fading-notification').each(function()
{$(this).delay(delay).fadeOut(500);delay=delay+500;});});var warcryQueues=[];warcryQueues['internal']=[];var WarcryQueue=function(queueName)
{var add=function(fnc)
{if(typeof queueName!='undefined')
{if(typeof warcryQueues[queueName]=='undefined')
{warcryQueues[queueName]=[]}
warcryQueues[queueName].push(fnc);}
else
{warcryQueues['internal'].push(fnc);}};var goNext=function()
{if(typeof queueName!='undefined')
{if($(warcryQueues[queueName]).size()<1)
{return false;}
var fnc=warcryQueues[queueName].shift();if(typeof fnc=='function')
{fnc();}
else
{console.log('WarcryQueue: There are no other functions in the queue "'+queueName+'".');}}
else
{if($(warcryQueues['internal']).size()<1)
{return false;}
var fnc=warcryQueues['internal'].shift();if(typeof fnc=='function')
{fnc();}
else
{console.log('WarcryQueue: There are no other functions in the queue.');}}};var clear=function()
{if(typeof queueName!='undefined')
{warcryQueues[queueName]=[]}
else
{warcryQueue['internal']=[]}};var size=function()
{if(typeof queueName!='undefined')
{return $(warcryQueues[queueName]).size();}
else
{return $(warcryQueues['internal']).size();}};return{add:add,goNext:goNext,clear:clear,size:size,};};function updateRealmStatus(id)
{var $this=$('#realm-status-'+id);var $realm=id;$.get($BaseURL+'/ajax.php?phase=19',{id:$realm,},function(data)
{if(data=='1')
{$this.addClass('online');}
else
{$this.addClass('offline');}
WarcryQueue('onload').goNext();});}
function updateLogonStatus()
{var $this=$('#logon-status2');$.get($BaseURL+'/ajax.php?phase=20',function(data)
{if(data=='1')
{$this.addClass('online');$this.html('Online');}
else
{$this.addClass('offline');$this.html('Offline');}
WarcryQueue('onload').goNext();});}
function updateTeamspeakStatus()
{var $this=$('#teeamspeak-status');WarcryQueue('onload').goNext();return;$.get("teamspeakStatus.php",function(data)
{if(data=='1')
{$this.addClass('online');$this.html('Online');}
else
{$this.addClass('offline');$this.html('Offline');}
WarcryQueue('onload').goNext();});}
function css_browser_selector(u)
{var ua=u.toLowerCase();var is=function(t)
{return ua.indexOf(t)>-1};var g='gecko',w='webkit',s='safari',o='opera',m='mobile';var h=document.documentElement;var b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js'];c=b.join(' ');h.className+=' '+c;return c;}
$(function()
{css_browser_selector(navigator.userAgent);});function convertDateToUTC(date)
{return new Date(date.getUTCFullYear(),date.getUTCMonth(),date.getUTCDate(),date.getUTCHours(),date.getUTCMinutes(),date.getUTCSeconds());}
function calcTime(city,offset)
{var d=new Date();var utc=d.getTime()+(d.getTimezoneOffset()*60000);var nd=new Date(utc+(3600000*parseInt(offset)));return nd.toString();}
function ServerTimeCloack()
{var currentTime=new Date(calcTime($TIMEZONE,$TIMEZONEOFFSET));var h=currentTime.getHours();var m=currentTime.getMinutes();var s=currentTime.getSeconds();setTimeout(function(){ServerTimeCloack();},1000);if(h<10)
{h="0"+h;}
if(m<10)
{m="0"+m;}
if(s<10)
{s="0"+s;}
var myClock=document.getElementById('server-time-cloack');if(myClock)
{myClock.textContent=h+":"+m+":"+s;myClock.innerText=h+":"+m+":"+s;}}
(function($)
{var $isListOpen=false;var $currentlyOpenList=null;var $lastScrollTimestamp=null;var $minTimeBetweenScroll=200;var methods={listState:'closed',defaults:{container:null,list:null,selected:null,arrow:null,scrollConfig:{scrollBy:5,},searchQueue:null,isScrollable:false,},init:function(config)
{if($(this).length<1)
{return;}
if(typeof $(this).data('SelectTransform')=='undefined')
{$(this).data('SelectTransform',{config:null});$(this).data('SelectTransform').config=$.extend({},methods.defaults,config);}
else
{$(this).data('SelectTransform').config=$.extend({},$(this).data('SelectTransform').config,config);}
var config=$(this).data('SelectTransform').config;var $element=$(this);$element.css({display:'none'});var container=document.createElement('div');if(typeof $element.attr('id')!='undefined')
{$(container).attr('id',$element.attr('id'));}
$(container).attr('class','js-select');$element.after(container);$(container).bind('click',function(event)
{event.stopPropagation();$element.SelectTransform('clickEvent');});config.container=$(container);var selected=document.createElement('div');$(selected).attr('class','js-select-selected');$(container).append(selected);config.selected=$(selected);var arrow=document.createElement('div');$(arrow).attr('class','js-select-arrow');$(selected).after(arrow);config.arrow=$(arrow);var dropdownCont=document.createElement('div');$(dropdownCont).attr('class','js-select-list-container');$(dropdownCont).attr('id','js-list-container');$(dropdownCont).css({display:'none',zIndex:101});$(config.container).append(dropdownCont);config.listContainer=$(dropdownCont);var listItemCount=$element.find('option').length;if(listItemCount>config.scrollConfig.scrollBy)
{config.isScrollable=true;var topController=document.createElement('div');$(topController).attr('class','js-select-list-top-controller');$(topController).attr('id','js-list-top-controller');$(topController).attr('align','center');$(config.listContainer).append(topController);$(topController).append('<p></p>');$(topController).bind('click',function(event)
{event.stopPropagation();$element.SelectTransform('ScrollUp');});config.topController=$(topController);var dropdownScroller=document.createElement('div');$(dropdownScroller).attr('class','js-select-list-scroller');$(dropdownScroller).attr('id','js-list-scroller');$(config.listContainer).append(dropdownScroller);config.listScroller=$(dropdownScroller);var dropdown=document.createElement('div');$(dropdown).attr('class','js-select-list-scrollable');$(dropdown).attr('id','js-list');$(config.listScroller).append(dropdown);config.list=$(dropdown);var bottomController=document.createElement('div');$(bottomController).attr('class','js-select-list-bottom-controller');$(bottomController).attr('id','js-list-bottom-controller');$(bottomController).attr('align','center');$(config.listContainer).append(bottomController);$(bottomController).append('<p></p>');$(bottomController).bind('click',function(event)
{event.stopPropagation();$element.SelectTransform('ScrollDown');});config.bottomController=$(bottomController);}
else
{var dropdown=document.createElement('div');$(dropdown).attr('class','js-select-list');$(dropdown).attr('id','js-list');$(config.listContainer).append(dropdown);config.list=$(dropdown);}
$element.find('option').each(function(index,element)
{var option=document.createElement('ul');$(option).attr('id',index);$(option).attr('class','js-select-list-option');$(option).html($(element).html());if(typeof $(element).attr('getHtmlFrom')!='undefined')
{var htmlElement=$(element).attr('getHtmlFrom');if($(htmlElement).length>0)
{$(option).html($(htmlElement).html());}}
if(typeof $(element).attr('style')!='undefined')
{$(option).attr('style',$(element).attr('style'));}
if(typeof $(element).attr('class')!='undefined')
{$(option).addClass($(element).attr('class'));}
if(typeof $(element).attr('selected')!='undefined')
{if(typeof $(element).attr('getHtmlFrom')!='undefined')
{var htmlElement=$(element).attr('getHtmlFrom');if($(htmlElement).length>0)
{$(config.selected).html($(htmlElement).html());}}
else
{$(config.selected).html($(element).html());}
$(option).addClass('js-select-list-option-selected');if(typeof $(element).attr('disabled')!='undefined')
{$(option).addClass('js-select-list-option-disabled');$(option).unbind('click');$(option).bind('click',function(event){event.stopPropagation();});}
else
{$(option).bind('click',function(event)
{event.stopPropagation();$element.SelectTransform('selectEvent',{option:element,index:index});});}}
else
{if(typeof $(element).attr('disabled')!='undefined')
{$(option).addClass('js-select-list-option-disabled');$(option).bind('click',function(event)
{event.stopPropagation();});}
else
{$(option).bind('click',function(event)
{event.stopPropagation();$element.SelectTransform('selectEvent',{option:element,index:index});});}}
$(config.list).append(option);});},clickEvent:function()
{var config=$(this).data('SelectTransform').config;$element=$(this);if($isListOpen)
{$currentlyOpenList.data('SelectTransform').config.arrow.removeClass('js-select-arrow-active');$currentlyOpenList.SelectTransform('closeList');$('html').unbind('click');}
else
{$(config.arrow).addClass('js-select-arrow-active');$(this).SelectTransform('openList');$('html').bind('click',function(event)
{event.stopPropagation();$element.SelectTransform('clickEvent');});}},openList:function()
{var $element=$(this);var config=$(this).data('SelectTransform').config;$(config.listContainer).slideDown('fast');$isListOpen=true;$currentlyOpenList=$(this);if(config.isScrollable)
{if(!$(config.listContainer).hasClass('js-select-list-container-scrollable'))
$(config.listContainer).addClass('js-select-list-container-scrollable');var searchbox=document.createElement('input');$(searchbox).css({opacity:0,position:'fixed',top:'0px',left:'0px'});$(searchbox).attr('type','text');$(searchbox).attr('id','js-select-searchbox');$('body').append(searchbox);$(searchbox).focus();config.searchBox=$(searchbox);$(searchbox).on('keyup',function(event)
{if(event.keyCode=='13')
{event.preventDefault();return false;}
var text=$(searchbox).val();$(config.list).children('ul').each(function(index,element)
{var thisString=$(this).html();text=text.toLowerCase();thisString=thisString.toLowerCase();if(text==''||text==null)
{clearTimeout(config.searchQueue);config.searchQueue=setTimeout(function(){$element.SelectTransform('ScrollTo',0);},300);}
else if(thisString.indexOf(text)>=0)
{clearTimeout(config.searchQueue);config.searchQueue=setTimeout(function(){$element.SelectTransform('ScrollTo',index);},300);}});});config.list.on('mousewheel',function(event,delta)
{event.preventDefault();if($lastScrollTimestamp!=null&&(parseInt($lastScrollTimestamp)+$minTimeBetweenScroll)>=parseInt(event.timeStamp))
{return false;}
$lastScrollTimestamp=event.timeStamp;var dir=delta>0?'Up':'Down';if(dir=='Up')
{$element.SelectTransform('ScrollUp');}
else
{$element.SelectTransform('ScrollDown');}
return false;});}},closeList:function()
{var config=$(this).data('SelectTransform').config;$isListOpen=false;$currentlyOpenList=null;$(config.listContainer).slideUp('fast');if(config.isScrollable)
{$(config.searchBox).detach();}
config.list.off('mousewheel');},unselectOption:function()
{var config=$(this).data('SelectTransform').config;$element=$(this);$option=$(this).find(':selected');$option.removeAttr('selected');$selectedInList=$(config.list).find('.js-select-list-option-selected');$selectedInList.removeClass('js-select-list-option-selected');},selectOption:function(options)
{var config=$(this).data('SelectTransform').config;$element=$(this);$(options.option).attr('selected','selected');$selectedInList=$(config.list).find('#'+options.index);$selectedInList.addClass('js-select-list-option-selected');},selectEvent:function(options)
{var config=$(this).data('SelectTransform').config;$element=$(this);var text=$(options.option).html();$(this).SelectTransform('unselectOption');if(typeof $(options.option).attr('getHtmlFrom')!='undefined')
{var htmlElement=$(options.option).attr('getHtmlFrom');if($(htmlElement).length>0)
{$(config.selected).html($(htmlElement).html());}}
else
{$(config.selected).html(text);}
$(this).SelectTransform('selectOption',{option:options.option,index:options.index});$element.SelectTransform('clickEvent');$element.trigger('change');},quickSelect:function(options)
{var config=$(this).data('SelectTransform').config;$element=$(this);var text=$(options.option).html();$(this).SelectTransform('unselectOption');if(typeof $(options.option).attr('getHtmlFrom')!='undefined')
{var htmlElement=$(options.option).attr('getHtmlFrom');if($(htmlElement).length>0)
{$(config.selected).html($(htmlElement).html());}}
else
{$(config.selected).html(text);}
$(this).SelectTransform('selectOption',{option:options.option,index:options.index});},ScrollUp:function()
{var config=$(this).data('SelectTransform').config;$element=$(this);var isSetupDone=$(config.list).attr('isSetupDone');if(typeof isSetupDone=='undefined'||isSetupDone!='1')
{$element.SelectTransform('ScrollSetup');}
var currentOffset=parseInt($(config.list).attr('currentOffset'));var totalOptions=parseInt($(config.list).attr('totalOptions'));var scrollToOffset=currentOffset-config.scrollConfig.scrollBy;if(scrollToOffset<0)
{scrollToOffset=0;}
var $find=config.list.children('#'+scrollToOffset);$(config.list).stop(true,true).animate({marginTop:'-'+($find.position().top)+'px'},450);$(config.list).attr('currentOffset',scrollToOffset);if(typeof config.searchBox!='undefined')
{config.searchBox.attr('value','');config.searchBox.focus();}},ScrollDown:function()
{var config=$(this).data('SelectTransform').config;$element=$(this);var isSetupDone=$(config.list).attr('isSetupDone');if(typeof isSetupDone=='undefined'||isSetupDone!='1')
{$element.SelectTransform('ScrollSetup');}
var currentOffset=parseInt($(config.list).attr('currentOffset'));var totalOptions=parseInt($(config.list).attr('totalOptions'));var scrollToOffset=currentOffset+config.scrollConfig.scrollBy;if(scrollToOffset>(totalOptions-config.scrollConfig.scrollBy))
{scrollToOffset=totalOptions-config.scrollConfig.scrollBy;}
var $find=config.list.children('#'+scrollToOffset);$(config.list).stop(true,true).animate({marginTop:'-'+($find.position().top)+'px'},450);$(config.list).attr('currentOffset',scrollToOffset);if(typeof config.searchBox!='undefined')
{config.searchBox.attr('value','');config.searchBox.focus();}},ScrollTo:function(index)
{var config=$(this).data('SelectTransform').config;var $element=$(this);var isSetupDone=$(config.list).attr('isSetupDone');if(typeof isSetupDone=='undefined'||isSetupDone!='1')
{$element.SelectTransform('ScrollSetup');}
var currentOffset=parseInt($(config.list).attr('currentOffset'));var totalOptions=parseInt($(config.list).attr('totalOptions'));if(index>(totalOptions-config.scrollConfig.scrollBy))
{index=totalOptions-config.scrollConfig.scrollBy;}
var $find=config.list.children('#'+index);$(config.list).stop(true,true).animate({marginTop:'-'+($find.position().top)+'px'},450);$(config.list).attr('currentOffset',index);},ScrollSetup:function()
{var config=$(this).data('SelectTransform').config;$element=$(this);$(config.list).attr('totalOptions',config.list.children('ul').length);$(config.list).attr('currentOffset','0');$(config.list).attr('isSetupDone','1');},}
$.fn.SelectTransform=function(method)
{if(methods[method])
{return methods[method].apply(this,Array.prototype.slice.call(arguments,1));}
else if(typeof method==='object'||!method)
{return methods.init.apply(this,arguments);}
else
{$.error('Method '+method+' does not exist on jQuery.SelectTransform');}};})(jQuery);(function($)
{var methods={init:function()
{if($(this).length<1)
{return;}
var $element=$(this);$element.append('<div class="loading-bar" align="left"><span id="bar"></span></div>');$element.LoadingBar('state1');},state1:function(callback)
{var $element=$(this);$element.find('#bar').stop(true,true).animate({width:'100px'},1000,function()
{$(this).css('width','100px');if(typeof callback=='function')
{callback();}});},state2:function(callback)
{var $element=$(this);$element.find('#bar').stop(true,true).animate({width:'200px'},500,function()
{$(this).css('width','200px');if(typeof callback=='function')
{callback();}});},state3:function(callback)
{var $element=$(this);$element.find('#bar').stop(true,true).animate({width:'300px'},500,function()
{$(this).css('width','300px');if(typeof callback=='function')
{callback();}});},state4:function(callback)
{var $element=$(this);$element.find('#bar').stop(true,true).animate({width:'400px'},500,function()
{$(this).css('width','400px');if(typeof callback=='function')
{callback();}});},restart:function()
{var $element=$(this);$element.find('#bar').css('width','0px');},}
$.fn.LoadingBar=function(method)
{if(methods[method])
{return methods[method].apply(this,Array.prototype.slice.call(arguments,1));}
else if(typeof method==='object'||!method)
{return methods.init.apply(this,arguments);}
else
{$.error('Method '+method+' does not exist on jQuery.LoadingBar');}};})(jQuery);;(function($)
{var $AlertBox={};var methods={getCaller:function()
{return(typeof $(this)!='undefined')?$AlertBox.CalledBy:null;},open:function(html,buttons)
{if(typeof $(this)!='undefined')
{$AlertBox.CalledBy=$(this);}
else
{$AlertBox.CalledBy=null;}
$('body').append('<div id="Alert-box_container" align="center"><div class="alert-box-holder">'+html+'</div></div>');if(typeof buttons=='object')
{$('.alert-box-holder').append('<div class="alert-box-buttons"></div>');for(var key in buttons)
{var button=buttons[key];var newButton=$('<a href="#">'+button.text+'</a>');if(typeof button.onclick=='string')
{if(button.onclick=='close')
$(newButton).click(function(){$.fn.WarcryAlertBox('close');return false;});}
else if(typeof button.onclick=='function')
{$(newButton).click(button.onclick);}
$('.alert-box-buttons').append(newButton);}}
$('#Alert-box_container').stop().animate({opacity:1},'fast');$AlertBox.closeEvent=true;$('#Alert-box_container > .alert-box-holder').on('mouseenter',function()
{$AlertBox.closeEvent=false;});$('#Alert-box_container > .alert-box-holder').on('mouseleave',function()
{$AlertBox.closeEvent=true;});$('#Alert-box_container').on('click',function()
{if($AlertBox.closeEvent)
{$.fn.WarcryAlertBox('close');}});$(document).keyup(function(e)
{if(e.keyCode==27)
{if($('#Alert-box_container').length>0)
{if($('#Alert-box_container').is(':visible'))
{$.fn.WarcryAlertBox('close');}}}});},close:function()
{$('#Alert-box_container').detach();},}
$.fn.WarcryAlertBox=function(method)
{if(methods[method])
{return methods[method].apply(this,Array.prototype.slice.call(arguments,1));}
else
{$.error('Method '+method+' does not exist on jQuery.WarcryAlertBox');}};})(jQuery);;