(function($)
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
{$.error('Method '+method+' does not exist on jQuery.WarcryAlertBox');}};})(jQuery);;function restoreFormData(formName,data)
{var thisForm=$(document).find('form[name="'+formName+'"]');$.each(data,function(key,value)
{var element=$(thisForm).find('[name="'+key+'"]');if(typeof value=='object')
{restoreFormData_withKey(formName,value,key);return;}
if(element.length>0)
{var elementType=element.get(0).tagName;}
else
{element=$(thisForm).find('[name*="'+key+'"]');if(element.length>0)
{var elementType=element.get(0).tagName;}}
if(elementType=='INPUT')
{if($(element).attr('type')=='checkbox')
{element.each(function(i,e)
{if($(e).attr('type')=='checkbox')
{if(typeof value=='object')
{$.each(value,function(k,v)
{if(e.checked==false)
{if($(e).attr('name').indexOf(k)>-1)
{e.checked=true;$(e).trigger('change');}}});}
else
{if(e.checked==false)
{if($(e).attr('name').indexOf(value)>-1)
{e.checked=true;$(e).trigger('change');}}}}});}
else if($(element).attr('type')=='radio')
{var $radioElements=$(element);var $radioValue=value;$(document).ready(function()
{$radioElements.each(function(i,e)
{if($(e).val()==$radioValue)
{if(e.checked==false)
{$(e).attr('checked',true);setTimeout(function(){$(e).trigger('click');},1000);}}
else
{$(e).removeAttr("checked");}});});}
else if($(element).attr('type')=='text'||$(element).attr('type')=='hidden')
{element.val(value);element.trigger('change');}
else
{console.log("Form Data Restoration: Undefined Input type \""+$(element).attr('type')+"\".");}}
else if(elementType=='TEXTAREA')
{element.html(value);$(element).trigger('change');}
else if(elementType=='SELECT')
{$(element).find('option[selected="selected"]').attr('selected',null);var option=$(element).find('option[value="'+value+'"]');option.attr("selected","selected");$(element).trigger('change');}
else
{console.log("Form Data Restoration: Undefined element type \""+elementType+"\", field name: \""+key+"\".");}});}
function restoreFormData_withKey(formName,data,prefix)
{var thisForm=$(document).find('form[name="'+formName+'"]');$.each(data,function(key,value)
{var element=$(thisForm).find('[name="'+prefix+'['+key+']"]');if(element.length>0)
{var elementType=element.get(0).tagName;}
else
{element=$(thisForm).find('[name*="'+key+'"]');if(element.length>0)
{var elementType=element.get(0).tagName;}}
if(elementType=='INPUT')
{if($(element).attr('type')=='checkbox')
{element.each(function(i,e)
{if($(e).attr('type')=='checkbox')
{if(typeof value=='object')
{$.each(value,function(k,v)
{if(e.checked==false)
{if($(e).attr('name').indexOf(k)>-1)
{e.checked=true;}}});}
else
{if(e.checked==false)
{if($(e).attr('name').indexOf(value)>-1)
{e.checked=true;}}}}});}
else if($(element).attr('type')=='radio')
{var $radioElements=$(element);var $radioValue=value;$(document).ready(function()
{$radioElements.each(function(i,e)
{if($(e).val()==$radioValue)
{if(e.checked==false)
{$(e).attr('checked',true);console.log("checking input: "+$radioValue);}}
else
{$(e).removeAttr("checked");}});});}
else if($(element).attr('type')=='text'||$(element).attr('type')=='hidden')
{element.val(value);element.trigger('change');}
else
{console.log("Form Data Restoration: Undefined Input type \""+$(element).attr('type')+"\".");}}
else if(elementType=='TEXTAREA')
{element.html(value);}
else if(elementType=='SELECT')
{var option=$(element).find('option[value="'+value+'"]');option.attr("selected","selected");}
else
{console.log("Form Data Restoration: Undefined element type \""+elementType+"\".");}});};$(document).ready(function()
{WarcryQueue('onload').goNext();$(document).find('select').each(function(index,element)
{if(typeof $(element).attr('styled')!='undefined')
{if($(element).attr('id')=='character-select')
{$(element).SelectTransform({scrollConfig:{scrollBy:4,}});}
else
{$(element).SelectTransform();}}});});$(function()
{if($('.vertical_center').length>0)
{$('.vertical_center').each(function()
{var parentHeight=$(this).parent().height();var height=$(this).outerHeight();$(this).css('position','relative');$(this).parent().css('height',(height+15)+'px');$(this).css({top:(parentHeight/2)+'px',marginTop:'-'+(height/2)+'px'});});}});function CenterSWFMovie(id)
{$this=$('#'+id);if($this.length>0)
{if(navigator.appName=='Microsoft Internet Explorer')
{var $window=$(window);var $width=$window.width();var $height=$window.height();setInterval(function()
{if(($width!=$window.width())||($height!=$window.height()))
{$width=$window.width();$height=$window.height();if($this.css('position')!='absolute')
{$this.css('position','absolute');}
var windowWidth=$(window).width();var width=$this.width();if(windowWidth<=1024)
{return;}
$this.css({left:(windowWidth/2)+'px',marginLeft:'-'+(width/2)+'px'});}},100);}
else
{$(window).resize(function()
{console.log('Resize!');if($this.css('position')!='absolute')
{$this.css('position','absolute');}
var windowWidth=$(window).width();var width=$this.width();if(windowWidth<=1024)
{return;}
$this.css({left:(windowWidth/2)+'px',marginLeft:'-'+(width/2)+'px'});});}}}
if(navigator.userAgent.toLowerCase().indexOf("chrome")>=0)
{$(window).load(function(){$('input:-webkit-autofill').each(function(){var text=$(this).val();var name=$(this).attr('name');$(this).after(this.outerHTML).remove();$('input[name='+name+']').val(text);});setTimeout(function()
{$('input:-webkit-autofill').each(function(){var text=$(this).val();var name=$(this).attr('name');$(this).after(this.outerHTML).remove();$('input[name='+name+']').val(text);});},100);});}
$(function()
{if(!$CURUSER.isOnline)
{$LoginBox.closeEvent=false;$('.member-side-left .not-logged-menu > li > a#login').on('click',function()
{if(!$LoginBox.isLoaded)
{$('body').append('<div id="Login-box_container" align="center"><div class="login-box-holder container_3"></div></div>');$('#Login-box_container > .login-box-holder').on('mouseenter',function()
{$LoginBox.closeEvent=false;});setTimeout(function()
{$('#Login-box_container').on('click',function()
{if($LoginBox.closeEvent)
{$('#Login-box_container').fadeOut('fast');}});$(document).keyup(function(e)
{if(e.keyCode==27)
{if($('#Login-box_container').is(':visible'))
{$('#Login-box_container').fadeOut('fast');}}});},1500);$('#Login-box_container').stop().animate({opacity:1},"fast",function()
{$('#temp-login-form > .login-box').appendTo('#Login-box_container > .login-box-holder');$LoginBox.isLoaded=true;$LoginBox.closeEvent=true;$('#Login-box_container > .login-box-holder').on('mouseleave',function()
{$LoginBox.closeEvent=true;});$('#js-login-box_urlbl').attr('value',window.location.href);});}
else
{$('#Login-box_container').stop().fadeIn('fast');}
return false;});}});function setupLabel()
{if($('.label_check input').length)
{$('.label_check').each(function()
{$(this).removeClass('c_on');});$('.label_check input:checked').each(function()
{$(this).parent('label').addClass('c_on');});};if($('.label_radio input').length)
{$('.label_radio').each(function()
{$(this).removeClass('r_on');});$('.label_radio input:checked').each(function()
{$(this).parent('label').addClass('r_on');});};};$(document).ready(function()
{$('body').addClass('has-js');$('.label_check, .label_radio').click(function()
{setupLabel();});setupLabel();});