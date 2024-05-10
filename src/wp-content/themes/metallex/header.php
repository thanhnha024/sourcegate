<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php $metallex_redux_demo = get_option('redux_demo'); ?>
<html>
  <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <link rel="shortcut icon" href="<?php if(isset($metallex_redux_demo['favicon']['url'])){?><?php echo esc_url($metallex_redux_demo['favicon']['url']); ?><?php }?>">
    <?php }?>
    <?php wp_head(); ?>
    </head>
  <body <?php body_class(); ?>>
  <?php if(isset($metallex_redux_demo['header_select']) && $metallex_redux_demo['header_select']== '2'){?>
      <div class="full_width hdr_top_bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
            <ul class="hdr_top_list">
              <li class="hdr_msg_icon"> <?php if(isset($metallex_redux_demo['header_text1'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_text1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '562, Mallin Street, New Youk, NY 100 254', 'metallex' );
                                    }
                                    ?> </li>
              <li class="hdr_call_icon"> <?php if(isset($metallex_redux_demo['header_text2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_text2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '+1800 654 7895', 'metallex' );
                                    }
                                    ?> </li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
            <div class="hdr_social_icons">
            <?php if(isset($metallex_redux_demo['header_social1']) && $metallex_redux_demo['header_social1']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social1']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon1'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon1']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-envelope', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header_social2']) && $metallex_redux_demo['header_social2']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social2']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon2'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon2']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-facebook', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header_social3']) && $metallex_redux_demo['header_social3']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social3']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon3'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon3']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-twitter', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header_social4']) && $metallex_redux_demo['header_social4']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social4']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon4'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon4']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-google-plus', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header_social5']) && $metallex_redux_demo['header_social5']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social5']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon5'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon5']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-linkedin', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class="full_width variation_home_1">
      <div class="container">
        <div class="row m_zero">
          <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 mobile_lead_hdr">
            <div class="hdr_search">
              <form role="search" class="navbar-form navbar-left">
                <input type="text" value="<?php echo esc_html__( 'Search', 'metallex' );?>" onblur="if(value=='') value = '<?php echo esc_html__( 'Search', 'metallex' );?>'" onfocus="if(value=='<?php echo esc_html__( 'Search', 'metallex' );?>') value = ''" class="form-control" name="s" id="s">
                <button type="submit" class="btn btn-default"></button>
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12 desktop_none">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logo"><a href="<?php echo esc_url(home_url('/')); ?>">
            <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo" class="img-responsive">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/common_image/logo.png" alt="logo" class="img-responsive">
            <?php } ?>
            </a></div>
            <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'metallex' );?></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          </div>
          <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 desktop_lead_hdr">
            <!-- <ul class="hdr_lead_list">
              <li><span class="hdr_lead_txt"> <?php if(isset($metallex_redux_demo['header_lead1'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_lead1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Leading Provider', 'metallex' );
                                    }
                                    ?> </span>
              </li>
              <li><span class="hdr_lead_txt"> <?php if(isset($metallex_redux_demo['header_lead2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_lead2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Certified', 'metallex' );
                                    }
                                    ?> </span>
              </li>
            </ul> -->
            <div class="hdr_search">
            <form role="search" class="navbar-form navbar-left">
                <input type="text" value="<?php echo esc_html__( 'Search', 'metallex' );?>" onblur="if(value=='') value = '<?php echo esc_html__( 'Search', 'metallex' );?>'" onfocus="if(value=='<?php echo esc_html__( 'Search', 'metallex' );?>') value = ''" class="form-control" name="s" id="s">
                <button type="submit" class="btn btn-default"></button>
              </form>
            </div>
          </div>
        </div>
        <div class="nav_col stricky home_page_hader">
          <div class="container">
            <div class="full_width yellow_nav_bg">
              <div class="row m_zero">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p_zero">
                  <nav id="main-navigation-wrapper" class="navbar navbar-default home_navbar">
                    <div class="thm-container">
                      <div class="navbar-header">
                        <div class="logo-menu">
                        <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/common_image/logo.png" alt="logo">
            <?php } ?>
                        </div>
                        <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'metallex' );?></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                      </div>
                      <div id="main-navigation" class="collapse navbar-collapse">
                        <nav id="mobile-menu">
                        <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_class' => '', 
                        'menu_id' => '',
                        'menu'            => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'echo'            => true,
                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                         'walker'            => new metallex_wp_bootstrap_navwalker(),
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul  class="nav navbar-nav %2$s">%3$s</ul>',
                        'depth'           => 1,        
                    )
                 ); ?>
                  </nav>
                 <?php if(isset($metallex_redux_demo['link_quote']) && $metallex_redux_demo['link_quote']!= ''){?>
                        <div class="quote_desktop"><a href="<?php echo esc_url($metallex_redux_demo['link_quote']);?>" class="view-all hvr-bounce-to-right get_quote_btn"> <?php if(isset($metallex_redux_demo['text_quote'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['text_quote']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Get quote', 'metallex' );
                                    }
                                    ?> </a></div>
                        <div class="quote_mob"><a href="<?php echo esc_url($metallex_redux_demo['link_quote']);?>" class="view-all hvr-bounce-to-right get_quote_btn get_quote_mob"> <?php if(isset($metallex_redux_demo['text_quote'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['text_quote']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Get quote', 'metallex' );
                                    }
                                    ?> </a></div>
                        <?php } ?>
                      </div>
                    </div>
                  </nav>
                </div>
                <!--
                <div class="col-lg-3 col-md-3 col-sm-3 col-sm-12 quote_mob_none">
                </div>
                -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  <?php }elseif(isset($metallex_redux_demo['header_select']) && $metallex_redux_demo['header_select']== '3'){?>

<div class="variation_hdr2_old">
      <div class="full_width hdr_top_bar hdr2_top_bar hdr3_top_bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
              <p class="hdr_certified hdr_certi_blue"><?php if(isset($metallex_redux_demo['header3_text1'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header3_text1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Leading Provider Of Industrial Solutions  /  Certified ISO 9001:2009', 'metallex' );
                                    }
                                    ?></p>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 call-center">
              <div class="hdr_top_call hdr_top_call1"> <?php if(isset($metallex_redux_demo['header3_text2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header3_text2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '+ (123) 456 7890', 'metallex' );
                                    }
                                    ?> </div>
              <div class="hdr_social_icons second_var third_var">
              <?php if(isset($metallex_redux_demo['header3_social1']) && $metallex_redux_demo['header3_social1']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header3_social1']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header3_icon1'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header3_icon1']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-facebook', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header3_social2']) && $metallex_redux_demo['header3_social2']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header3_social2']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header3_icon2'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header3_icon2']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-twitter', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header3_social3']) && $metallex_redux_demo['header3_social3']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header3_social3']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header3_icon3'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header3_icon3']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-google-plus', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header3_social4']) && $metallex_redux_demo['header3_social4']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header3_social4']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header3_icon4'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header3_icon4']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-linkedin', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <header class="full_width var3_header">
        <nav id="main-navigation-wrapper" class="navbar navbar-default finance-navbar var2_main_menu_wrapper var3_main_menu_wrapper">
          <div class="thm-container">
            <div class="navbar-header">
              <div class="logo-menu"><a href="<?php echo esc_url(home_url('/')); ?>">
              <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/home_page_variation3/logo.png" alt="logo">
            <?php } ?>
              </a></div>
              <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'metallex' );?></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div id="main-navigation" class="collapse navbar-collapse var2_main_menu_wrapper var3_main_menu_wrapper">
              <div class="row m_zero">
                <div class="col-md-3 col-sm-12 col-xs-12 logo"><a href="<?php echo esc_url(home_url('/')); ?>">
                <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/home_page_variation3/logo.png" alt="logo">
            <?php } ?>
                </a></div>
                <div class="col-md-9 col-sm-12 col-xs-12 pull-right col_pad_zero var3_mob_padzero">
                  <div id="main-navigation-inn">
                    <nav id="mobile-menu">
                    <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_class' => '', 
                        'menu_id' => '',
                        'menu'            => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'echo'            => true,
                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                         'walker'            => new metallex_wp_bootstrap_navwalker(),
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul  class="nav navbar-nav %2$s">%3$s</ul>',
                        'depth'           => 1,        
                    )
                 ); ?>
               </nav>
                    <div class="hdr_search second_var_hdr_search search_mobile_none">
                      <button type="submit" class="btn btn-default"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
    </div>

    <?php }elseif(isset($metallex_redux_demo['header_select']) && $metallex_redux_demo['header_select']== '4'){?>

<div class="full_width hdr_top_bar hdr4_top_bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
            <ul class="hdr_top_list var4_top_lst">
              <li class="hdr_msg_icon"><?php if(isset($metallex_redux_demo['header_text1'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_text1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '562, Mallin Street, New Youk, NY 100 254', 'metallex' );
                                    }
                                    ?></li>
              <li class="hdr_call_icon"><?php if(isset($metallex_redux_demo['header_text2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_text2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '+1800 654 7895', 'metallex' );
                                    }
                                    ?></li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
            <div class="hdr_social_icons var4_hdr_social_icons">
            <?php if(isset($metallex_redux_demo['header_social1']) && $metallex_redux_demo['header_social1']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social1']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon1'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon1']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-envelope', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header_social2']) && $metallex_redux_demo['header_social2']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social2']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon2'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon2']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-facebook', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header_social3']) && $metallex_redux_demo['header_social3']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social3']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon3'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon3']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-twitter', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header_social4']) && $metallex_redux_demo['header_social4']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social4']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon4'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon4']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-google-plus', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header_social5']) && $metallex_redux_demo['header_social5']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header_social5']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header_icon5'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header_icon5']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-linkedin', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class="full_width var4_hdr">
      <div class="container">
        <div class="row mob_pad15">
          <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 mobile_lead_hdr">
            <ul class="hdr_lead_list var4_hdr_lead">
              <li><span class="hdr_lead_txt var4_hdr_lead_txt"><?php if(isset($metallex_redux_demo['header_lead1'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_lead1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Leading Provider', 'metallex' );
                                    }
                                    ?></span>
              </li>
              <li><span class="hdr_lead_txt var4_hdr_lead_txt"><?php if(isset($metallex_redux_demo['header_lead2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_lead2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Certified', 'metallex' );
                                    }
                                    ?></span>
              </li>
            </ul>
            <div class="hdr_search var4hdr_search">
            <form role="search" class="navbar-form navbar-left">
                <input type="text" value="<?php echo esc_html__( 'Search', 'metallex' );?>" onblur="if(value=='') value = '<?php echo esc_html__( 'Search', 'metallex' );?>'" onfocus="if(value=='<?php echo esc_html__( 'Search', 'metallex' );?>') value = ''" class="form-control" name="s" id="s">
                <button type="submit" class="btn btn-default"></button>
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12 desktop_none">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logo pad_zero">
            <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo" class="img-responsive">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/home_page_variation4/logo.png" alt="logo" class="img-responsive">
            <?php } ?>
            </a></div>
            <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'metallex' );?></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          </div>
          <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 desktop_lead_hdr">
            <ul class="hdr_lead_list var4_hdr_lead">
              <li><span class="hdr_lead_txt var4_hdr_lead_txt"><?php if(isset($metallex_redux_demo['header_lead1'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_lead1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Leading Provider', 'metallex' );
                                    }
                                    ?></span>
              </li>
              <li><span class="hdr_lead_txt var4_hdr_lead_txt"><?php if(isset($metallex_redux_demo['header_lead2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header_lead2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Certified', 'metallex' );
                                    }
                                    ?></span>
              </li>
            </ul>
            <div class="hdr_search var4hdr_search">
              <form role="search" class="navbar-form navbar-left">
                <input type="text" value="<?php echo esc_html__( 'Search', 'metallex' );?>" onblur="if(value=='') value = '<?php echo esc_html__( 'Search', 'metallex' );?>'" onfocus="if(value=='<?php echo esc_html__( 'Search', 'metallex' );?>') value = ''" class="form-control" name="s" id="s">
                <button type="submit" class="btn btn-default"></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <nav id="main-navigation-wrapper" class="navbar navbar-default finance-navbar var4_main_menu_wrapper">
        <div class="thm-container">
          <div class="navbar-header">
            <div class="logo-menu">
            <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/common_image/logo.png" alt="logo">
            <?php } ?>
            </div>
            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'metallex' );?></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          </div>
          <div id="main-navigation" class="collapse navbar-collapse">
            <nav id="mobile-menu">
            <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_class' => '', 
                        'menu_id' => '',
                        'menu'            => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'echo'            => true,
                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                         'walker'            => new metallex_wp_bootstrap_navwalker(),
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul  class="nav navbar-nav %2$s">%3$s</ul>',
                        'depth'           => 1,        
                    )
                 ); ?>
               </nav>
                 <?php if(isset($metallex_redux_demo['link_quote']) && $metallex_redux_demo['link_quote']!= ''){?>
            <div class="quote_desktop"><a href="<?php echo esc_url($metallex_redux_demo['link_quote']);?>" class="view-all hvr-bounce-to-right get_quote_btn var4_get_quote"> <?php if(isset($metallex_redux_demo['text_quote'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['text_quote']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Get quote', 'metallex' );
                                    }
                                    ?> </a></div>
            <div class="quote_mob"><a href="<?php echo esc_url($metallex_redux_demo['link_quote']);?>" class="view-all hvr-bounce-to-right get_quote_btn get_quote_mob"> <?php if(isset($metallex_redux_demo['text_quote'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['text_quote']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Get quote', 'metallex' );
                                    }
                                    ?> </a></div>
            <?php } ?>
          </div>
        </div>
      </nav>
    </header>

  <?php }elseif(isset($metallex_redux_demo['header_select']) && $metallex_redux_demo['header_select']== '5'){?>

  <div class="variation_hdr2">
      <div class="full_width hdr_top_bar hdr5_top_bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
              <p class="hdr_certified var5_certi_gray"><?php if(isset($metallex_redux_demo['header3_text1'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header3_text1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Leading Provider Of Industrial Solutions  /  Certified ISO 9001:2009', 'metallex' );
                                    }
                                    ?></p>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 call-center">
              <div class="hdr_top_call var5_tp_call"> <?php if(isset($metallex_redux_demo['header3_text2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header3_text2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '+ (123) 456 7890', 'metallex' );
                                    }
                                    ?> </div>
              <div class="hdr_social_icons second_var fifth_var">
              <?php if(isset($metallex_redux_demo['header3_social1']) && $metallex_redux_demo['header3_social1']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header3_social1']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header3_icon1'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header3_icon1']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-facebook', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header3_social2']) && $metallex_redux_demo['header3_social2']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header3_social2']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header3_icon2'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header3_icon2']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-twitter', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header3_social3']) && $metallex_redux_demo['header3_social3']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header3_social3']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header3_icon3'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header3_icon3']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-google-plus', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
            <?php if(isset($metallex_redux_demo['header3_social4']) && $metallex_redux_demo['header3_social4']!= ''){?>
            <a href="<?php echo esc_url($metallex_redux_demo['header3_social4']);?>" class="hvr-bounce-to-bottom"><i aria-hidden="true" class="<?php if(isset($metallex_redux_demo['header3_icon4'])){?>
                        <?php echo esc_attr($metallex_redux_demo['header3_icon4']); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'fa fa-linkedin', 'metallex' );
                        }
                        ?>"></i></a>
            <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <header class="full_width var3_header var5_header">
        <nav id="main-navigation-wrapper" class="navbar navbar-default finance-navbar var2_main_menu_wrapper var3_main_menu_wrapper var5_main_menu_wrapper">
          <div class="thm-container">
            <div class="navbar-header">
              <div class="logo-menu"><a href="<?php echo esc_url(home_url('/')); ?>">
              <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/home_page_variation5/logo.png" alt="logo">
            <?php } ?>
              </a></div>
              <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'metallex' );?></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div id="main-navigation" class="collapse navbar-collapse var2_main_menu_wrapper var3_main_menu_wrapper var5_main_menu_wrapper">
              <div class="row row m_zero">
                <div class="col-md-3 col-sm-12 col-xs-12 logo"><a href="<?php echo esc_url(home_url('/')); ?>">
                <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/home_page_variation5/logo.png" alt="logo">
            <?php } ?>
                </a></div>
                <div class="pull-right col-md-9 col-sm-12 col-xs-12 col_pad_zero_new top77">
                  <div id="main-navigation-inn">
                    <nav id="mobile-menu">
                    <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_class' => '', 
                        'menu_id' => '',
                        'menu'            => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'echo'            => true,
                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                         'walker'            => new metallex_wp_bootstrap_navwalker(),
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul  class="nav navbar-nav %2$s">%3$s</ul>',
                        'depth'           => 1,        
                    )
                 ); ?>
                </nav>
                    <div class="hdr_search second_var_hdr_search search_mobile_none">
                      <button type="submit" class="btn btn-default"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
    </div>

  <?php }else{ ?>
    <!-- =========header start============-->
    <div class="variation_hdr2 variation_position">
      <div class="full_width hdr_top_bar hdr2_top_bar updated-1-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <p class="hdr_certified"><img src="<?php echo get_template_directory_uri();?>/images/home_page/tick-icon-top.png" alt="" /> <?php if(isset($metallex_redux_demo['header1_text1'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header1_text1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Certified ISO 9001:2009', 'metallex' );
                                    }
                                    ?></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 call-center text-right">
              <ul class="list-inline contact-info">
                <li><?php if(isset($metallex_redux_demo['header1_text2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header1_text2']));?>
                                    <?php }else{?>
                                    <?php echo wp_specialchars_decode(esc_html__( '<a href="#"><i class="fa fa-phone"></i> + (1800) 456 7890</a>', 'metallex' ),ENT_QUOTES);
                                    }
                                    ?></li><!--
                --><li><?php if(isset($metallex_redux_demo['header1_text3'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['header1_text3']));?>
                                    <?php }else{?>
                                    <?php echo wp_specialchars_decode(esc_html__( '<a href="#"><i class="fa fa-envelope-o"></i> info@metallex.com</a>', 'metallex' ),ENT_QUOTES);
                                    }
                                    ?></li>
              </ul><!-- /.list-inline -->              
            </div>
          </div>
        </div>
      </div>
      <header class="full_width var2_header hdr_variation2 updated-1-1">
        <nav id="main-navigation-wrapper" class="navbar navbar-default var_2_blck_strip finance-navbar var2_main_menu_wrapper updated-1-1">
          <div class="thm-container">
            <div class="navbar-header">
              <div class="logo-menu"><a href="<?php echo esc_url(home_url('/')); ?>">
              <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/home_page_variation2/logo.png" alt="logo">
            <?php } ?>
            </a></div>
              <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only"><?php echo esc_html__( 'Toggle navigation', 'metallex' );?></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div id="main-navigation" class="collapse navbar-collapse var2_main_menu_wrapper">
              <div class="row m_zero">
                <div class="col-md-3 col-sm-12 col-xs-12 logo"><a href="<?php echo esc_url(home_url('/')); ?>">
              <?php if(isset($metallex_redux_demo['logo']['url']) && $metallex_redux_demo['logo']['url'] != ''){?>
            <img src="<?php echo esc_url($metallex_redux_demo['logo']['url']); ?>" alt="logo">
            <?php }else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/images/home_page_variation2/logo.png" alt="logo">
            <?php } ?>
            </a></div>
                <div class="col-md-9 col-sm-12 col-xs-12 pull-right col_pad_zero var3_mob_padzero">
                  <div id="main-navigation-inn">
                    <nav id="mobile-menu">
                    <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_class' => '', 
                        'menu_id' => '',
                        'menu'            => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'echo'            => true,
                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                         'walker'            => new metallex_wp_bootstrap_navwalker(),
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul  class="nav navbar-nav %2$s">%3$s</ul>',
                        'depth'           => 1,        
                    )
                 ); ?>
               </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
      </div>
      <?php } ?>
