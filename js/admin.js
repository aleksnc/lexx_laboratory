//left Block Sections

$(document).ready(function(){
  /*leftBlock select*/

  $('.leftBlock__section li:not(:first-child)').addClass('leftBlock__section--li');

  $('.leftBlock__section--btn').on( 'click', function(){
    $('.leftBlock__section--btn').toggleClass('select', false);
    $('.leftBlock__section').toggleClass('leftBlock__section--select', false);
    var $this =$(this);
    $this.toggleClass('select');
    $this.parent().toggleClass('leftBlock__section--select');
  });

  /*explorer*/
  $('.explorer__path-list').each(function(){
    var lvParth = $(this).data('lv');
    if(lvParth>1){
      $(this).css('display','none');
    }
    var lvPadding = lvParth*20+15;
    $(this).css('padding-left', lvPadding);
  });



  $('.explorer__path-list').click(function() {
    var lvParth = $(this).data('lv');
    if(lvParth!=0) {
      $(this).toggleClass('ico-blog-o');
    }
    var dataBtn= $(this).data('lv');

    if(dataBtn ==1) {
      $('.explorer__path-list').each(function () {
        if ($(this).data('lv') > dataBtn) {
          $(this).css('display', 'none');
          $(this).toggleClass('ico-blog-o', false);
        }
      });
    }

    var $this = $(this);
    var $child = $this.next();
    var $childlv = $child.data('lv')+'a';
    var $childlv_n = $child.data('lv');
    var $thislv_n = $(this).data('lv');
    var $thislv = $(this).data('lv')+'a';
    var $staticLv =$childlv;

    if($thislv_n<$childlv_n){
      $child.toggle();
      findChild($child, $childlv, $staticLv);
    }

    function findChild($child, $childlv, $staticLv) {

      if ($child.hasClass('explorer__path-list')) {

        var $childNext = $child.next();
        var $childNextlv = $childNext.data('lv')+'a';

        if ($childNextlv == $staticLv) {

          $childNext.toggle();
          $child = $childNext;
          $childlv = $childNextlv;

          return findChild($child, $childlv, $staticLv);

        } else {
          if ($childNextlv < $staticLv) {
            return(false);
          } else{

            $child = $childNext;
            $childlv = $childNextlv;

            return findChild($child, $childlv, $staticLv);
          }
        }

      }
    }

    var IdParth = $(this).data('id');
	
	ajaxEplorer(IdParth);
  
  });
 
$('#ExplEditSend').click(function(){

       //var content =tinyMCE.activeEditor.getContent()
       var content=$('.nicEdit-main').html();
       var content=tinyMCE.activeEditor.getContent();
       var pubPosition =$('.explorer__edit-publish').prop('checked');
       var headerMenu =$('.explorer__edit-headermenu').prop('checked');
       var links =$('.explorer__edit-link').val();
       var title =$('.explorer__edit-title').val();
       var parents =$('.explorer__edit-parent option:selected').val();
       var typeSend=$('#ExplEditSend').data('type');
		if(parents=='undefined'){
			parents='0';
		}
		
		console.log(parents);
		console.log(content);
       var array_rew=['pushContent',typeSend,pubPosition,headerMenu,links,title,parents];
       ajaxPush(array_rew,content);

});


/* new-reviews */

  $('#RewiewsPush').click(function(){

    var id_vk=$('.explorer__rewiews-avatar').val();
    var rev_text=$('.explorer__rewiews-rewiew').val();
    var array_rew=['rewiev',id_vk,rev_text];

     // array_rew='array_rew='+JSON.stringify(array_rew);

    ajaxPush(array_rew);

  });



function ajaxEplorer(IdParth){
  $('#ExplEditSend').data('type','edit');
	  $.ajax({
      type: 'POST',
      url: '/admin/newpages',
      data: 'name='+IdParth,
	  dataType: "json",
      success: function(data){
		console.log(data['idd']);		  
        $('.explorer__edit-check').css('display','block');
        $('.explorer__edit-text').empty();
        $('.explorer__edit-title').val(data['title']);
        $('.explorer__edit-link').val(data['link']);		
		$('.explorer__edit-parent').empty();
		var content=data['content'];
		$('.explorer__path-list').each(function(){
			var P_title = $(this).html();
			var Sel_val=$(this).data('parent');
			if(Sel_val==data['parent']){			
			$('.explorer__edit-parent').append('<option selected value="'+Sel_val+'">'+P_title+'</option>');
			} else{
				$('.explorer__edit-parent').append('<option value="'+Sel_val+'">'+P_title+'</option>');
			}
		});
		
       	
		if(data['header']=='1'){
	
			 $('.explorer__edit-headermenu').attr("checked","checked");
		} 
		if(data['publish']=='1'){
			 $('.explorer__edit-publish').attr("checked","checked");
		}

        $('.explorer__edit-text').append('<textarea name="editor1" class="editor" id="editor1" rows="10" cols="80" >'+content+'</textarea>');

        tinymce.init({
		  selector: '#editor1',
		  height: 500,
		  plugins: [
			'advlist autolink lists link image charmap print preview anchor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  content_css: '//www.tinymce.com/css/codepen.min.css'
		});
	 // new nicEditor({fullPanel : true}).panelInstance('editor1',{hasPanel : true});
      }
    });
}



function ajaxPush(array_rew,content){
	  content = content || 0;
  $.ajax({
    type: 'POST',
    url: '/admin/newreviews',
    data: 'dateArray='+array_rew+'&content='+content,
    dataType: "json",
    success: function(data){
      console.log(data['i']);
      console.log(data['row']);

      $('.Sendsuccess').empty();
      $('.Sendsuccess').css('display','block');
      $('.Sendsuccess').html(data['i']);

      if(array_rew[0]=='rewiev'){
        $('.re_ava').attr('src',data['img']);
        $('.re_name').html(data['name']);
        $('.re_content').html(data['content']);
        var doubleReviews=$('.user_rewiew').find('[href="https://vk.com/'+array_rew[1]+'"]');
        if(data['i']=='OK'){
            if(doubleReviews.length==0){
            $('.rewiews__edit').append('<div class="user_rewiew"><span  style="display: inline-block; width: 200px; margin: 5px 15px;">' +
                '<a  href="https://vk.com/'+array_rew[1]+'">'+data['name']+'</a></span>'+
                '<span class="ad_content_rewiew" >'+array_rew[2]+'</span>'+
                '<input type="checkbox" checked/> Опубликовать <hr/></div>'
            );
          } else{
            doubleReviews.parent().parent().find('.ad_content_rewiew').html(array_rew[2]);
          }
        }
      }
    }
  });
}

});

