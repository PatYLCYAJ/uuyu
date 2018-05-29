<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <?php if(ACTION_NAME == index and CONTROLLER_NAME == Index): ?><title><?php echo seo_replace(C('media_index.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_index.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_index.seo_description');?>">
    <?php elseif(ACTION_NAME == index and CONTROLLER_NAME == Game): ?>
      <title><?php echo seo_replace(C('media_game_list.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_game_list.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_game_list.seo_description');?>">
    <?php elseif(ACTION_NAME == detail and CONTROLLER_NAME == Game): ?>
      <title><?php echo seo_replace(C('media_game_detail.seo_title'),array('game_name'=>$data['game_name']),'media');?></title>
      <meta name="keywords" content="<?php echo C('media_game_detail.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_game_detail.seo_description');?>">
    <?php elseif(ACTION_NAME == index and CONTROLLER_NAME == Gift): ?>
      <title><?php echo seo_replace(C('media_gift_index.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_gift_index.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_gift_index.seo_description');?>">
    <?php elseif(ACTION_NAME == giftdetail and CONTROLLER_NAME == Gift): ?>
      <title><?php echo seo_replace(C('media_gift_detail.seo_title'),array('game_name'=>$data['game_name'],'giftbag_name'=>$data['giftbag_name']),'media');?></title>
      <meta name="keywords" content="<?php echo C('media_gift_detail.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_gift_detail.seo_description');?>">
    <?php elseif(ACTION_NAME == mall and CONTROLLER_NAME == PointShop): ?>
      <title><?php echo seo_replace(C('media_shop.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_shop.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_shop.seo_description');?>">
    <?php elseif(ACTION_NAME == mall_detail and CONTROLLER_NAME == PointShop): ?>
      <title><?php echo seo_replace(C('media_shop_detail.seo_title'),array('good_name'=>$data['good_name']),'media');?></title>
      <meta name="keywords" content="<?php echo C('media_shop_detail.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_shop_detail.seo_description');?>">
    <?php elseif(ACTION_NAME == detail and CONTROLLER_NAME == Article): ?>
      <title><?php echo seo_replace(C('media_news_detail.seo_title'),array('title'=>$data['title']),'media');?></title>
      <meta name="keywords" content="<?php echo C('media_news_detail.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_news_detail.seo_description');?>">
    <?php elseif(ACTION_NAME == user_recharge and CONTROLLER_NAME == Subscriber): ?>
      <title><?php echo seo_replace(C('media_recharge.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_recharge.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_recharge.seo_description');?>">
    <?php elseif(CONTROLLER_NAME == Service): ?>
      <title><?php echo seo_replace(C('media_service.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_service.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_service.seo_description');?>">
    <?php else: ?>
      <title><?php echo seo_replace(C('media_index.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_index.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_index.seo_description');?>"><?php endif; ?>
    <link href="<?php echo get_cover(C('PC_SET_ICO'),'path');?>" type="image/x-icon" rel="shortcut icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="applicable-device" content="mobile">   
    <link href="/Public/Media/css/swiper.min.css" rel="stylesheet" >
    <link href="/Public/Media/css/common.css" rel="stylesheet" >
    <link href="/Public/Media/css/pc.css" rel="stylesheet">
    
<link href="/Public/Media/css/mall.css" rel="stylesheet" >

  </head>
  <body>
    

    <div class="main">
      <div class="pc-header">
        <div class="pc-inner clearfix">
          <div class="pc-download">
            <a href="javascript:;" class="pc-downloadbtn"><i class="pc-icon-phone"></i><span>扫码关注微信公众号</span></a>
            <div class="pc-qrcode clearfix">
             <div class="pc-ios"><img src="/Public/Media/images/iframe/Qr-code-u-uuyu.jpg"><span>扫我关注</span></div>
            </div>
          </div>
          <a href="<?php echo U('Index/index');?>" class="pc-logo"><?php if(!empty($union_set)): ?><img src="<?php echo get_cover($union_set['pc_logo'],'path');?>"><?php else: ?><img src="<?php echo get_cover(C('PC_SET_LOGO'),'path');?>"><?php endif; ?></a>
        </div>
      </div>
      <div class="pc-container">
        <div class="pc-wrap">
        <div class="pc-inner">
          <div class="pc-mobile">
						<div class="pc-full-box">
            <div class="pc-iframe">
              
<header class="header">
  <section class="wrap">
    <a href="javascript:;" onclick="history.go(-1)" class="hbtn left arrow-left"><span class="table"><span class="table-cell"><img src="/Public/Media/images/back_return.png"></span></span></a>
    <div class="caption"><span class="table"><span class="table-cell">积分记录</span></span></div>
    <a href="<?php echo U('mall_rule');?>" class="hbtn right mall-rule"><span class="table"><span class="table-cell"><img src="/Public/Media/images/nav_mall_rule.png"></span></span></a>
  </section>
</header>

              
              
<div class="mainer integral-record">
  <div class="occupy"></div>

  <section class="trunker">

    <section class="inner">
      <section class="contain">
        <div class="list integral-record-list">
          <?php if(0): ?><!-- $data eq '' -->
            <div class="empty">
              <img src="/Public/Media/images/blank_record.png" class="empty-icon">
              <p class="empty-text">暂无记录</p>
            </div>
          <?php else: ?>
          <div class="tab-scroll clearfix">
            <div id="tab-menu">
              <div class="swiper-container">
                  <div class="swiper-wrapper tabmenu">
                      <div class="swiper-slide swiper-visible active"><a href="javascript:;">全部</a></div>
                      <div class="swiper-slide swiper-visible"><a href="javascript:;">获取</a></div>
                      <div class="swiper-slide swiper-visible"><a href="javascript:;">兑换</a></div>
                  </div>
              </div>
            </div>
            <div id="tab-slide">
              <div class="swiper-container mallrecordlist">
                  <div class="swiper-wrapper tabpanel">
                    <div class="swiper-slide">
                      <?php if(!empty($data["all"])): ?><ul class="list text-pic-list">
                      <?php if(is_array($data['all'])): $i = 0; $__LIST__ = $data['all'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$da): $mod = ($i % 2 );++$i;?><li class="clearfix">
                          <div class="item clearfix">
                            <?php if($da['key'] == 'sign_in'): ?><a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="/Public/Media/images/mall_record_sign.png" class="icon"></a>
                            <?php elseif($da['key'] == 'bind_phone'): ?>
                              <a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="/Public/Media/images/mall_record_bind.png" class="icon"></a>
                            <?php elseif($da['key'] == 'share_game'): ?>
                              <a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="<?php echo getgameicon($da['game_id']);?>" class="icon"></a>
                            <?php elseif($da['key'] == 'share_article'): ?>
                              <a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="<?php echo getgameicon($da['game_id']);?>" class="icon"></a>
                            <?php elseif($da['type'] <= 0): ?>
                              <a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="<?php echo ($da["cover"]); ?>" class="icon"></a><?php endif; ?>
                            <?php if($da["type"] > 0): ?><div class="butnbox">
                              <span class="table">
                              <span class="table-cell">+<?php echo ($da["point"]); ?></span>
                              </span>
                              </div>
                              <div class="text">
                                <?php if($da["key"] == "share_game"): ?><div class="title"><span class="name">《<?php echo get_game_name($da['game_id']);?>》充值</span></div>
                                <?php else: ?>
                                  <div class="title"><span class="name"><?php echo ($da["name"]); ?></span></div><?php endif; ?>
                                <p class="info"><?php echo set_show_time($da['create_time'],'time','other');?></p>
                              </div>
                            <?php else: ?>
                              <div class="butnbox">
                              <span class="table">
                              <span class="table-cell reduce-score">-<?php echo ($da["pay_amount"]); ?></span>
                              </span>
                              </div>
                              <div class="text">
                                <div class="title"><span class="name"><?php echo ($da['good_name']); ?>兑换</span></div>
                                <p class="info"><?php echo set_show_time($da['create_time'],'time','other');?></p>
                              </div><?php endif; ?> 
                            
                          </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                      <?php else: ?>
                      <div class="empty">
                        <img src="/Public/Media/images/blank_record.png" class="empty-icon">
                        <p class="empty-text">暂无记录</p>
                      </div><?php endif; ?>
                    </div>
                    <div class="swiper-slide">
                      <?php if(!empty($data["pointrecord"])): ?><ul class="list text-pic-list">
                        <?php if(is_array($data['pointrecord'])): $i = 0; $__LIST__ = $data['pointrecord'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pr): $mod = ($i % 2 );++$i;?><li class="clearfix">
                          <div class="item clearfix">
                            <?php if($pr['key'] == 'sign_in'): ?><a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="/Public/Media/images/mall_record_sign.png" class="icon"></a>
                            <?php elseif($pr['key'] == 'bind_phone'): ?>
                              <a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="/Public/Media/images/mall_record_bind.png" class="icon"></a>
                            <?php elseif($pr['key'] == 'share_game'): ?>
                              <a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="<?php echo getgameicon($pr['game_id']);?>" class="icon"></a>
                            <?php elseif($pr['key'] == 'share_article'): ?>
                              <a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="" class="icon"></a>
                            <?php elseif($pr['type'] <= 0): ?>
                              <a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="<?php echo ($pr["cover"]); ?>" class="icon"></a><?php endif; ?>
                            <div class="butnbox">
                            <?php if($pr["type"] > 0): ?><span class="table">
                              <span class="table-cell">+<?php echo ($pr["point"]); ?></span>
                              </span></div>
                              <div class="text">
                                <?php if($pr["key"] == "share_game"): ?><div class="title"><span class="name">《<?php echo get_game_name($pr['game_id']);?>》充值</span></div>
                                <?php else: ?>
                                  <div class="title"><span class="name"><?php echo ($pr["name"]); ?></span></div><?php endif; ?>
                                <p class="info"><?php echo set_show_time($pr['create_time'],'time','other');?></p>
                              </div><?php endif; ?> 
                            
                          </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                      <?php else: ?>
                      <div class="empty">
                        <img src="/Public/Media/images/blank_record.png" class="empty-icon">
                        <p class="empty-text">暂无记录</p>
                      </div><?php endif; ?>
                    </div>
                    <div class="swiper-slide">
                      <?php if(!empty($data["pointshoprecord"])): ?><ul class="list text-pic-list tpl3">
                        <?php if(is_array($data['pointshoprecord'])): $i = 0; $__LIST__ = $data['pointshoprecord'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$psr): $mod = ($i % 2 );++$i;?><li class="clearfix">
                          <div class="item clearfix">
                            <?php if($psr['type'] <= 0): ?><a  class="iconbox"><span class="font table"><span class="table-cell"><?php echo C('BITMAP');?></span></span><img src="<?php echo ($psr["cover"]); ?>" class="icon"></a><?php endif; ?>
                            <div class="butnbox">
                            <?php if($psr["type"] <= 0): ?><span class="table">
                              <span class="table-cell reduce-score">-<?php echo ($psr["pay_amount"]); ?></span>
                              </span></div>
                              <div class="text">
                                <div class="title"><span class="name"><?php echo ($psr['good_name']); ?>兑换</span></div>
                                <p class="info"><?php echo set_show_time($psr['create_time'],'time','other');?></p>
                              </div><?php endif; ?> 
                            
                          </div>
													<?php $good_key = json_decode($psr['good_key'],true); ?>
                        <div class="addressbox">
                            <div class="table"><div class="table-cell"><?php if($psr['good_type'] == 2): ?><a href="javascript:;" class="copy address-butn" data-value="<?php echo ($good_key[0]); ?>">复制</a><?php echo ($good_key[0]); else: if(!empty($psr["real_name"])): echo ($psr['real_name']); ?>,<?php endif; if(!empty($psr["phone"])): echo ($psr['phone']); ?>,<?php endif; echo ($psr['address']); endif; ?></div></div>
                          </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                      <?php else: ?>
                      <div class="empty">
                        <img src="/Public/Media/images/blank_record.png" class="empty-icon">
                        <p class="empty-text">暂无记录</p>
                      </div><?php endif; ?>
                    </div>
                  </div>
              </div>
            </div>
          </div><?php endif; ?>
        </div>
      </section>
      
    </section>
  </section>
</div>


              
              
              <div class="popplog"></div>
              
            </div>
						<!-- <a href="javascript:;" class="pc-screen-btn jsscreen"><i class="pc-screen"></i></a> -->
						</div>
            <a href="javascript:history.back();" class="pc-butn"><i class="pc-icon"></i></a>
          <div class="pc-theme"><img class="pc-theme-pic" src="/Public/Media/images/iframe/theme.png"></div>
          </div>
          <div class="pc-sys"><div class="pc-qrcode-box"><img class="pc-qrcode-sys" src="<?php echo get_cover(C('PC_SET_QRCODE'),'path');?>"></div><p>扫码即玩 快乐游戏</p></div>
          <div class="pc-container-footer">
						<div class="pc-copyright">
							<p class="pc-cr">
								<span><img src="/Public/Media/images/iframe/pc_ghs.png"><?php echo C('WEB_BEIAN');?></span>
								<span>经营性许可证：<?php echo C('WEB_SITE');?></span>
								<span><?php echo C('PC_GUAN');?></span>
							</p>
							<p>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防受骗上当。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
						</div>
					</div>
        </div>
      </div>
      </div>
    </div>
    
    <div class="loginbutdiv hidden">
        <?php if($wx_login == 1): ?><a href="javascript:;" onclick="register('weixin')" class="butn"><img src="/Public/Media/images/login_third_weixin.png"></a><?php endif; ?>
        <?php if($qq_login == 1): ?><a href="javascript:;" onclick="register('qq')" class="butn"><img src="/Public/Media/images/login_third_qq.png"></a><?php endif; ?>
        <?php if($wb_login == 1): ?><a href="javascript:;" onclick="register('weibo')" class="butn"><img src="/Public/Media/images/login_third_sina.png"></a><?php endif; ?>
        <?php if($bd_login == 1): ?><a href="javascript:;" onclick="register('baidu')" class="butn"><img src="/Public/Media/images/login_third_tencent.png"></a><?php endif; ?>
    </div>
    
    <script src="/Public/Media/js/jquery-1.11.1.min.js"></script>
    <script src="/Public/Media/js/swiper-3.4.2.jquery.min.js"></script>
    <script src="/Public/static/layer/layer.js"></script>
    <script src="/Public/Media/js/pop.lwx.min.js"></script>
    <script src="/Public/Media/js/common.js"></script>
    
<script>
		function Copy(str,that){
				var save = function(e){
						e.clipboardData.setData('text/plain', str);
						e.preventDefault();
				}
				
				document.addEventListener('copy', save);
				document.execCommand('copy');
				document.removeEventListener('copy',save);
				
		}
    $(function() {
      var viewSwiper = new Swiper('#tab-slide .swiper-container', {
        autoHeight:true,
        onSlideChangeStart: function() {
          updateNavPosition()
        }
      })

      var previewSwiper = new Swiper('#tab-menu .swiper-container', {
        visibilityFullFit: true,
        slidesPerView: 'auto',
        onlyExternal: true,
        onTap: function() {
          viewSwiper.slideTo(previewSwiper.clickedIndex)
        }
      })
      
      var updateNavPosition = function() {
        $('#tab-menu .active').removeClass('active')
        var activeNav = $('#tab-menu .swiper-slide').eq(viewSwiper.activeIndex).addClass('active')
        if (!activeNav.hasClass('swiper-visible')) {
          if (activeNav.index() > previewSwiper.activeIndex) {
            var thumbsPerNav = Math.floor(previewSwiper.width / activeNav.width()) - 1
            previewSwiper.slideTo(activeNav.index() - thumbsPerNav)
          } else {
            previewSwiper.slideTo(activeNav.index())
          }
        }
      }
			
			$('.copy').on('click',function() {
				$(this).text('已复制');
				Copy($(this).attr('data-value'),$(this));
			});
      
    });
</script>

    <?php echo ($logdiv); ?>
    <script>
      var gid = "<?php echo ($game_id); ?>";
      var pid = "<?php echo ($promote_id); ?>";
      var open_name_auth = 0;
      var name_auth_tip = '';
      var $bindphoneadd = "<?php echo ($bindphoneadd); ?>";
      <?php if($open_name_auth == 1): ?>var open_name_auth = "<?php echo ($open_name_auth); ?>";
          var name_auth_tip = "<?php echo ($name_auth_tip); ?>";<?php endif; ?>
    </script>
    <script>
      $("body").on("click",'.butnbox a.butnlogin',function(){
        res = jslogin();
        return res;
      });
      function jslogin(){
          $uid = "<?php echo is_login();?>";
          if($uid<=0){
            $('.jslogin').click();
            return false;
          }else{
            return true;
          }
      }
    </script>
    <script>  
      $('.pc-download').hover(function(){$('.pc-qrcode').fadeIn();},function(){$('.pc-qrcode').fadeOut();});
      
      function resizephone() {
          var winHeight = $( window ).height();
					
					
							var hedh = $('.pc-header').height();
							var both = $('.pc-container-footer').height();
							var pch = winHeight-hedh;
							if($(window).width()>720)
								$('.pc-container').css({'height':pch+'px'});
							var mobheight = pch-both;
							
          var mobwidth = parseInt(mobheight*512/1000);
					
					
          var scale = parseInt(mobwidth/410*100);

              $('html').css('font-size',231*scale/100+'%');
							
      }
      resizephone();
      var resizephonetime = null;
      $(window).resize(function() {
        if (resizephonetime) {clearTimeout(resizephonetime);}
        resizephonetime = setTimeout(function() {
				if($(window).width()<=720) {resizephone();}
        },10);
      });
			
			$('.jsscreen').click(function() {
				var that = $(this);
				if (that.hasClass('full')) {
					that.removeClass('full').css({'right':'-1.2rem'});
					$('.pc-full-box').removeClass('full-iframe').unwrap();
				} else {
					that.addClass('full');
					that.css({'right':'-0.76rem'});
					$('.pc-full-box').addClass('full-iframe').wrap('<div style="position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:1;background:#000"></div>');				
				}
				
			});
      
    </script>
    
  </body>
</html>