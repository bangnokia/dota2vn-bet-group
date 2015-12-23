
function testscroll(target_id)
{
	//document.location = document.location + '#' + target_id;
	/*
	if($("div").is("#" + target_id))
	{
		destination = $('#' + target_id).offset().top;
		$('body').animate( { scrollTop: destination }, 1100 );
	}.
	*/
}
function select_all()
{
	if($('.admin_checkbox').prop('checked') == true)
		$('.admin_checkbox').prop('checked', false);
	else
		$('.admin_checkbox').prop('checked', true);
}
function reg_payment(input, id)
{
	if(input.value == "")
		document.getElementById(id).checked=false;
	else
		document.getElementById(id).checked=true;
}
function changeurl(url)
{
	window.history.pushState("", "", url);
}
function popup(act_id)
{
	document.getElementById(act_id).click();
}
function chart()
{
	if($("div").is("#chart_canvas"))
	{
		var ctx = document.getElementById('chart_canvas').getContext('2d');
		window.myLine = new Chart(ctx).Line(lineChartData, 
		{
			responsive: true
		});
	}
}
function onloadpage(act)
{
	if(act == "agree")
	{
		popup("agree_welcome");
	}
	if(act == "popup")
	{
		popup("popup_welcome");
	}
	if(act == "error")
	{
		popup("popup_error_finish");
	}
	chart();
}





















//SLIDER
//var slider_interval = setInterval(function(){	next_slide(); }, 1000);
function stop_slide()
{
	//clearInterval(slider_interval);
}
function start_slide()
{
	window.slider_interval = setInterval(function(){	next_slide(); }, 5000);
}
function next_slide()
{
	document.getElementById("rightControl").click();
}
$(document).ready(function(){
	//if(document.getElementById('slidesContainer')) 		window.onload = start_slide;
		
  var currentPosition = 0;
  var slideWidth = 650;
  var slides = $('.slide');
  var numberOfSlides = slides.length;
  
  $('#slidesContainer').css('overflow', 'hidden');
  slides.wrapAll('<div id="slideInner"></div>')
	.css({
      'float' : 'left',
      'width' : slideWidth - 10
    });

  $('#slideInner').css('width', slideWidth * numberOfSlides);
  $('.control')
    .bind('click', function(){
	currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    
    //manageControls(currentPosition);	// Hide / show controls
	if(currentPosition > numberOfSlides-1)	currentPosition = 0;
	if(currentPosition < 0)					currentPosition = numberOfSlides-1;
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    });
  });

  function manageControls(position){
	if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
    if(position==numberOfSlides-1){ $('#rightControl').hide() } else{ $('#rightControl').show() }
  }
});

function validateForm(title, text, form, module) 
{
	// + CHECK CAPCHA
	
	if(module == "error")
	{
		if(form.comment.value.length < 2)	{	alertTip(title, text + " <span class='RedText'>comment text too short</span>. ");	return;	}
		//form.submit();
	}
	if(module == "comments")
	{
		if(form.comment_message.value.length < 2)	{	alertTip(title, text + " <span class='RedText'>comment text too short</span>. ");	return;	}
		//form.submit();
	}
	if(module == "hash_add")
	{
		if(form.hash.value.length < 5)	{	alertTip(title, text + " <span class='RedText'>hash too short</span>. ");	return;	}
		if(form.type.value < 1)	{	alertTip(title, text + " <span class='RedText'>hash type</span>. ");	return;	}
		if(form.price.value < 5)	{	alertTip(title, text + " <span class='RedText'>price</span>. ");	return;	}
		//form.submit();
	}
	if(module == "hash_sell")
	{
		if(form.pass.value.length < 2)	{	alertTip(title, text + " <span class='RedText'>password too short</span>. ");	return;	}
		//form.submit();
	}
	if(module == "search")
	{
		if(form.search_request.value.length < 2)	{	alertTip(title, text + " <span class='RedText'>search query too short</span>. ");	return;	}
		//form.submit();
	}
	if(module == "refuse")
	{
		if(form.refuse_text.value.length < 2)	{	alertTip(title, text + " <span class='RedText'>refuse text too short</span>. ");	return;	}
		//form.submit();
	}
	if(module == "pentest")
	{
		if(form.url.value.length < 4)	{	alertTip(title, text + " <span class='RedText'>Url too short</span>. ");	return;	}
		if(form.owner.value > 2)	{	alertTip(title, text + " <span class='RedText'>Owner type</span>. ");	return;	}
		//form.submit();
	}
	if(module == "reg")
	{
		if(form.login.value.length < 3)	{	alertTip(title, text + " <span class='RedText'>Login too short</span>. ");	return;	}
		if(form.pass.value.length < 6)	{	alertTip(title, text + " <span class='RedText'>Password too short</span>. ");	return;	}
		if(form.mail.value.length < 6)	{	alertTip(title, text + " <span class='RedText'>Mail</span>. ");	return;	}

	}
	if(module == "auth")
	{
		if(form.login.value.length < 3)	{	alertTip(title, text + " <span class='RedText'>Login too short</span>. ");	return;	}
		if(form.pass.value.length < 6)	{	alertTip(title, text + " <span class='RedText'>Password too short</span>. ");	return;	}
		//form.submit();
	}
	if(module == "restore")
	{
		if(form.mail.value.length < 6)	{	alertTip(title, text + " <span class='RedText'>Mail</span>. ");	return;	}
		//form.submit();
	}
	if(module == "restore_pass")
	{
		if(form.new_password.value.length < 6)	{	alertTip(title, text + " <span class='RedText'>Password is too short</span>. ");	return;	}
		if(form.repeat_password.value.length < 6)	{	alertTip(title, text + " <span class='RedText'>Repeated password is too short</span>. ");	return;	}
		//form.submit();
	}
	if(module == "edit")
	{
		if(form.title.value.length < 3)	{	alertTip(title, text + " <span class='RedText'>title</span>. ");	return;	}
		if(form.secret_code.value.length < 10)	{	alertTip(title, text + " <span class='RedText'>exploit code too short</span>. ");	return;	}
		
		if(form.category.value < 1)	{	alertTip(title, text + " <span class='RedText'>category</span>. ");	return;	}
		if(form.platform.value < 1)	{	alertTip(title, text + " <span class='RedText'>platform</span>. ");	return;	}
		if(form.risk.value < 1)	{		alertTip(title, text + " <span class='RedText'>risk</span>. ");	return;	}
		if(form.programming.value < 1)	{	alertTip(title, text + " <span class='RedText'>programming language</span>. ");	return;	}
		
		//form.submit();
	}
	var check = document.getElementById("capcha_input");
	if($check)
	{
		if(form.capcha.value.length != 5)	{ alertTip(title, text + " <span class='RedText'>Capcha is incorrect</span>. ");	return; }
		else
		{
			$.get("capcha/check/" + form.capcha.value, function( res ) {
				if(res == false)
				{
					alertTip(title, text + " <span class='RedText'>Capcha is incorrect</span>. ");	return;
				}
				else
				{
					form.submit();
				}
			}, 'html');
		}
	}
	else
		form.submit();
}

function alertTip(title, text) 
{
	text = text + "<br><br><button class='ok'>Ok</button>";
    
	$('<div />').qtip({
        content: {
            text: text,
            title: title
        },
        position: {
            my: 'center', at: 'center',
            target: $(window)
        },
        show: {
            ready: true,
            modal: {
                on: true,
                blur: false
            }
        },
        hide: false,
        style: 'dialogue',
        events: 
		{
            render: function(event, api) {
				$( "body" ).append( "<div id='qtip-overlay' style='opacity: 1; z-index: 14800;'><div></div></div>" );
                $('button.ok', api.elements.content).click(function(e) {
                    api.hide(e);
					document.getElementById("qtip-overlay").remove();
                });
            },
            hide: function(event, api) { api.destroy(); }
        }
    });
}
function confirmTip(title, text, url) 
{
	text = text + "<br><br><button class='ok'>Ok</button> <button class='cancel'>Cancel</button>";
    
	$('<div />').qtip({
        content: {
            text: text,
            title: title
        },
        position: {
            my: 'center', at: 'center',
            target: $(window)
        },
        show: {
            ready: true,
            modal: {
                on: true,
                blur: false
            }
        },
        hide: false,
        style: 'dialogue',
        events: 
		{
            render: function(event, api) {
				//$('#qtip-overlay')
				//api.elements.overlay.toggle(true);
				$( "body" ).append( "<div id='qtip-overlay' style='opacity: 1; z-index: 14800;'><div></div></div>" );
                $('button.ok', api.elements.content).click(function(e) {
                    api.hide(e);
					document.getElementById("qtip-overlay").remove();
					document.location = url;
                });
                $('button.cancel', api.elements.content).click(function(e) {
                    api.hide(e);
					document.getElementById("qtip-overlay").remove();
                });
            },
            hide: function(event, api) { api.destroy(); }
        }
    });
}
//// CHAT
function createGrowl(text, persistent) 
{
    var target = $('.qtip.jgrowl:visible:last');

    $('<div/>').qtip({
        content: {
            text: text,
            title: {
                text: 'New Message',
                button: true
            }
        },
        position: {
            target: [0,0],
            container: $('#qtip-growl-container')
        },
        show: {
            event: false,
            ready: true,
            effect: function() {
                $(this).stop(0, 1).animate({ height: 'toggle' }, 400, 'swing');
            },
            delay: 0,
            persistent: persistent
        },
        hide: {
            event: false,
            effect: function(api) {
                $(this).stop(0, 1).animate({ height: 'toggle' }, 400, 'swing');
            }
        },
        style: {
            width: 250,
            classes: 'jgrowl',
            tip: false
        },
        events: {
            render: function(event, api) {
                if(!api.options.show.persistent) {
                    $(this).bind('mouseover mouseout', function(e) {
                        var lifespan = 5000;

                        clearTimeout(api.timer);
                        if (e.type !== 'mouseover') {
                            api.timer = setTimeout(function() { api.hide(e) }, lifespan);
                        }
                    })
                    .triggerHandler('mouseout');
                }
            }
        }
    });
}

function check_msg()
{
	
	$.get("/support/check", function( text ) {
		if(text != "")
		{
			document.getElementById("audio_receive_message").play(); // Play sound
			createGrowl(text);// Show Notify
		}
	}, 'html');
	
	$( ".support_contacts_item" ).each(function( index ) {
		var div = $(".support_contacts_item").get(index);
		var id = div.getAttribute('id');
		$("#new_msg_" + id).load("/support/check/contacts/" + id);
	});
	
}
//FIRST LOAD FOR USER
$(document).ready(
	function()
	{
		var id = $("#chat_id").val();
		if(id != undefined)
		{
			$("#chat_content").load("/support/load/" + id, function() {
				$("#chat_content").animate({ scrollTop: document.getElementById("chat_content").scrollHeight });
			});
		}
	}
);
//LOAD FOR ADMIN
$(document).ready(
	function()
	{
		$('.support_contacts_item').click(
			function() 
			{
				if($(this).attr("id") != $("#chat_id").val())
				{
					$("#chat_content").html("<img src='/img/loading.gif'>");
					window.history.pushState("", "", "/support/" + $(this).attr("id"));
					$(".support_contacts").find(".support_contacts_item_selected").attr("class", "support_contacts_item");
					$(this).attr("class", "support_contacts_item support_contacts_item_selected");
					$("#chat_id").val($(this).attr("id"));
					$("#chat_content").load("/support/load/" + $(this).attr("id"), function() {
						$("#chat_content").animate({ scrollTop: document.getElementById("chat_content").scrollHeight });
					});
				}
			}
		);
	}
);
//LOAD HISTORY
function load_history(history) 
{
	var chat_id = document.getElementById("chat_id").value;
	var real_scroll = document.getElementById("chat_content").scrollHeight;
	var prev_scroll = $("#scroll_height").attr("class");
	var history_id = history.id;
	document.getElementById(history.id).remove();
	
	$("#chat_content").prepend( 	
			$("<div>").load( "/support/load/history/" + chat_id + "/" + history_id, function() 	
			{	
				var scroll = real_scroll - prev_scroll;
				$("#scroll_height").attr("class", real_scroll);
				document.getElementById("chat_content").scrollTop = scroll;
			})	
		);	
}
// SEND FUNC
function send_msg() 
{
	var text = $("#support_input_text").val();
	var id = $("#chat_id").val();
	if(id != undefined)
	if(text.length > 0)
	{
		$("#support_input_text").val("");
		$("#chat_content").append( 	
			$("<div>").load( "/support/send/" + id + "/" + encodeURIComponent(text), function() 	
			{	
				$("#chat_content").animate({ scrollTop: document.getElementById("chat_content").scrollHeight }); 
				//document.getElementById("audio_send_message").play(); 
			})	
		);	
	}
}
//SEND BY ENTER
$(document).ready(
	function()
	{
		$("#support_input_text").keypress(
		function(e)
		{
			if(e.keyCode==13)
			{
				e.preventDefault();
				send_msg();
			}
		});
	}
);
//SEND
$(document).ready(
	function()
	{
		$('#support_input_button').click(
		function(e)
		{
			send_msg();
		}
		);
	}
);

var interval;
clearInterval(interval);

// RECEIVE 
$(document).ready(
	function()
	{
		interval = setInterval(function(){ receive_msg(); }, 3000);
	}
);
// RECEIVE FUNC
function receive_msg() 
{
	var id = $("#chat_id").val();
	if(id != undefined)
	{
		var scroll = false;
		var system = document.getElementById("chat_content");
		if((system.scrollTop + system.clientHeight) == system.scrollHeight) 	scroll = true;
		
		$("#chat_content").append( 	
			$("<div>").load( "/support/receive/" + id, function() 	
			{
				if(scroll)
				{
					//move_scroll = true;
					//if(document.getElementById("chat_content").scrollHeight)
					$("#chat_content").animate({ scrollTop: document.getElementById("chat_content").scrollHeight }); 
				}
			})
		);	
	}
}
// DELETE
function delete_msg(message_id) 
{
	if(message_id != undefined)
	{
		$("<div>").load( "/support/delete/" + message_id, function(res) 	
		{
			if(res == 1)
				$("#message_" + message_id).remove();
		})
	}
}
// DELETE
function delete_msg_all(message_id) 
{
	if(message_id != undefined)
	{
		$("<div>").load( "/support/delete/all/" + message_id, function(res) 	
		{
			if(res == 1)
				$("#" + message_id).remove();
				$("#chat_content").html("");
		})
	}
}




















function change_radio(id)
{
	document.getElementById(id).checked = true;
}
//// COMMENTS
function comments_change(id)
{
	var count = 500;
	
	var entered = $('#' + id).val();
	entered = entered.length;
	if(entered > count)
	{
		document.getElementById(id).value = document.getElementById(id).value.substring(0, count);
		entered = count;
	}
	document.getElementById("limit_count_0").value = count - entered;
}
$(document).ready(
	function()
	{
		$('.allow_tip').each(
			function() 
			{
				$(this).qtip({
					content: 
					{
						text: $(this).children('.TipText')
						//, title: 'Sample'
					},
					position: 
					{
						target: 'mouse', 
						adjust: { x: 20, y: 15 } 
					},
					style: { classes: 'qtip-green' }
				 });
			}
		);
	}
);


$( document ).ready(function() {
  get_uploaded_imgs();
});
$(document).ready(
	function()
	{
		$('div.allow_tip_big').each(
			function() 
			{
				$(this).qtip({
					content: 
					{
						text: $(this).children('.TipText')
						//, title: 'Sample'
					},
					position: 
					{
						
						adjust: 
						{
							x: -870,
							y: 15
						}
					},
					style: { classes: 'qtip-green' }
				 });
			}
		);
	}
);

function comments_rate(act, id)
{
	if(act == 1)
	{
		$("#rate_down_div").css( "text-decoration", "none" );
		$("#rate_up_div").css( "text-decoration", "underline" );
		$("#rate_down").removeAttr('checked');
		$("#rate_up").attr('checked', 'checked');
		$("<div>").load("/rate/up/" + id);
	}
	if(act == 2)
	{
		$("#rate_up_div").css( "text-decoration", "none" );
		$("#rate_down_div").css( "text-decoration", "underline" );
		$("#rate_up").removeAttr('checked');
		$("#rate_down").attr('checked', 'checked');
		$("<div>").load("/rate/down/" + id);
	}
}
function del_uploaded_imgs(del_id)
{
	var id = $('#temp_id').val()
	$("#fm_content").load("/uploaded/" + id + "/" + del_id);
}
function get_uploaded_imgs()
{
	var id = $('#temp_id').val()
	$("#fm_content").load("/uploaded/" + id );
}
function change_capcha()
{
	$("#capcha").attr("src","/capcha/new");
}
function search_types(type) 
{
	if(type == 1)
	{
		$("#search_author").animate({height: 'hide'}, 10);
		$("#search_content").animate({height: 'show'}, 400);
	}
	if(type == 2)
	{
		$("#search_content").animate({height: 'hide'}, 10);
		$("#search_author").animate({height: 'show'}, 400);
	}
}
function add_price(act, type) 
{
	if(act == "show")
	{
		if(type == 1)
		{
			$("#content_price_2").animate({height: 'hide'}, 200);
			$("#content_price_1").animate({height: 'show'}, 400);
		}
		if(type == 2)
		{
			$("#content_price_1").animate({height: 'hide'}, 200);
			$("#content_price_2").animate({height: 'show'}, 400);
		}
	}
	if(act == "hide")
	{
		$("#content_price_1").animate({height: 'hide'}, 200);
		$("#content_price_2").animate({height: 'hide'}, 200);
	}
}
function faq (objName) 
{
  if( $(objName).css('display') == 'none' ) 
  {
	$(objName).animate({height: 'show'}, 400);
  }
  else 
  {
	$(objName).animate({height: 'hide'}, 200);
  }
}
$(function () 
{
	$('#fileupload').fileupload({
		url: '/uploader/' + $('#temp_id').val(),
		done: function (e, data) 
		{
			get_uploaded_imgs();
			document.getElementById("progress_bar").style.width = "0%";
		},
		progressall: function (e, data) 
		{
			var progress = parseInt(data.loaded / data.total * 100, 10);
			$('#progress .progress-bar').css( 'width',  progress + '%');
		}
	});
});