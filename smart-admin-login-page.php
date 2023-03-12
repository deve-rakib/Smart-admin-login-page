<?php
/**
 * Plugin Name: Smart Admin Login Page
 * Plugin URI: https://wordpress.org/plugins/smart-admin-login-page/
 * Description: The customizer login page plugin will help you to enable a custom login page to your dream website.
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Rakib H.
 * Author URI: https://www.linkedin.com/in/deve-rakib/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: slp
 **/





/****
 *      Plguin Option page - function 
 ****/


// Admin menu
function slp_add_theme_page()
{
    add_menu_page('Loging Option', 'Admin loging Page', 'manage_options', 'slp-loging-option', 'slp_create_page', 'dashicons-external', 101);
}
add_action('admin_menu', 'slp_add_theme_page');


// admin menu - Inclding css
function slp_admin_style()
{
    wp_enqueue_style('slp_admin_style', plugins_url('css/slp_admin_style.css', __FILE__), false, '1.0.0');
    wp_enqueue_style('slp_admin_preview', plugins_url('css/slp_admin_preview.css', __FILE__), false, '1.0.0');
}
add_action('admin_enqueue_scripts', 'slp_admin_style');
// END - Inclding css


// Call-back function
function slp_create_page()
{
    ?>
    <div id="slp_main_container">
        <!-- Main body section -->
        <div id="slp_body_area">
            <h1 id="slp_title">
                <?php print esc_attr("Customize The Admin Login Page"); ?>
                </h2>
                <div class="slp_form">
                    <form action="options.php" method="post">

                        <!-- Default / must use -->
                        <?php wp_nonce_field('update-options'); ?>


                        <!-- 
                            ============= Logo style =================
                         -->
                        <h3 class="slp_section_title" style="margin-top: 0 !important">Site logo</h3>
                        <div>
                            <!-- Logo image -->
                            <div><label for="slp_login_logo" name="slp_login_logo">
                                    <?php print esc_attr("Change your logo"); ?>
                                </label>
                                <input type="text" name="slp_login_logo" placeholder="https://example.com/logo.png"
                                    value="<?php print get_option('slp_login_logo'); ?>">
                            </div>

                        </div>
                        <div class="slp_elements_grid">
                            <!-- border Color -->
                            <div><label for="slp_logBorder_clr" name="slp_logBorder_clr">
                                    <?php print esc_attr("Border color "); ?> <b>
                                        <?php print
                                            get_option('slp_logBorder_clr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_logBorder_clr" value="<?php print
                                    get_option('slp_logBorder_clr'); ?>">
                            </div>

                            <!--  border  -->
                            <div><label for="slp_login_logo_border" name="slp_login_logo_border">
                                    <?php print esc_attr("Border"); ?>
                                </label>
                                <input type="number" name="slp_login_logo_border" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_login_logo_border'); ?>">
                            </div>

                            <!--  border-radius  -->
                            <div><label for="slp_loginLogo_round" name="slp_loginLogo_round">
                                    <?php print esc_attr("Border radius"); ?>
                                </label>
                                <input type="number" name="slp_loginLogo_round" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_loginLogo_round'); ?>">
                            </div>

                            <!--  padding  -->
                            <div><label for="slp_loginLogo_padding" name="slp_loginLogo_padding">
                                    <?php print esc_attr("Padding"); ?>
                                </label>
                                <input type="number" name="slp_loginLogo_padding" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_loginLogo_padding'); ?>">
                            </div>
                        </div>



                        <!-- 
                            =========== Background image style ==============
                         -->
                        <h3 class="slp_section_title">Background Image</h3>
                        <div>
                            <!-- Background image  -->
                            <div><label for="slp_login_bg_img" name="slp_login_bg_img">
                                    <?php print esc_attr("Change background image"); ?>
                                </label>
                                <input type="text" name="slp_login_bg_img" placeholder="https://example.com/background.jpg"
                                    value="<?php print
                                        get_option('slp_login_bg_img'); ?>">
                            </div>
                        </div>
                        <div class="slp_elements_grid">
                            <!-- box bg Color -->
                            <div><label for="slp_login_bgx_overlay" name="slp_login_bgx_overlay">
                                    <?php print esc_attr("Color "); ?> <b>
                                        <?php print
                                            get_option('slp_login_bgx_overlay'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_login_bgx_overlay" value="<?php print
                                    get_option('slp_login_bgx_overlay'); ?>">
                            </div>

                            <!-- Brightness  -->
                            <div><label for="slp_login_bg_bright" name="slp_login_bg_bright">
                                    <?php print esc_attr("Brightness"); ?>
                                </label>
                                <input type="number" name="slp_login_bg_bright" min="0" max="1" step="0.1" placeholder="0"
                                    value="<?php print
                                        get_option('slp_login_bg_bright'); ?>">
                            </div>
                        </div>



                        <!--
                            =============== Login box style ================
                        -->
                        <h3 class="slp_section_title">Login box style</h3>
                        <div class="slp_elements_grid">
                            <!-- box bg Color -->
                            <div><label for="slp_loginBox_clr" name="slp_loginBox_clr">
                                    <?php print esc_attr("background color "); ?> <b>
                                        <?php print
                                            get_option('slp_loginBox_clr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_loginBox_clr" value="<?php print
                                    get_option('slp_loginBox_clr'); ?>">
                            </div>

                            <!-- bg color opacity  -->
                            <div><label for="slp_loginBox_color_bright" name="slp_loginBox_color_bright">
                                    <?php print esc_attr("Brightness"); ?>
                                </label>
                                <input type="number" name="slp_loginBox_color_bright" min="0" max="1" step="0.1"
                                    placeholder="0" value="<?php print
                                        get_option('slp_loginBox_color_bright'); ?>">
                            </div>

                            <!-- box border Color -->
                            <div><label for="slp_loginBox_bdrClr" name="slp_loginBox_bdrClr">
                                    <?php print esc_attr("Broder color "); ?> <b>
                                        <?php print
                                            get_option('slp_loginBox_bdrClr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_loginBox_bdrClr" value="<?php print
                                    get_option('slp_loginBox_bdrClr'); ?>">
                            </div>

                            <!-- Box border  -->
                            <div><label for="slp_loginBox_border" name="slp_loginBox_border">
                                    <?php print esc_attr("Border"); ?>
                                </label>
                                <input type="number" name="slp_loginBox_border" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_loginBox_border'); ?>">
                            </div>

                            <!-- Box rounded / border-radius  -->
                            <div><label for="slp_loginBox_round" name="slp_loginBox_round">
                                    <?php print esc_attr("Border radius"); ?>
                                </label>
                                <input type="number" name="slp_loginBox_round" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_loginBox_round'); ?>">
                            </div>

                            <!-- Box padding  -->
                            <div><label for="slp_loginBox_padding" name="slp_loginBox_padding">
                                    <?php print esc_attr("Padding"); ?>
                                </label>
                                <input type="number" name="slp_loginBox_padding" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_loginBox_padding'); ?>">
                            </div>


                        </div>


                        <!--
                            ============= Login input style ===================
                        -->
                        <h3 class="slp_section_title">Input style</h3>
                        <div class="slp_elements_grid">


                            <!-- text color -->
                            <div><label for="slp_login_input_clr" name="slp_login_input_clr">
                                    <?php print esc_attr("Text color "); ?> <b>
                                        <?php print
                                            get_option('slp_login_input_clr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_login_input_clr" value="<?php print
                                    get_option('slp_login_input_clr'); ?>">
                            </div>


                            <!--  text font size  -->
                            <div><label for="slp_login_input_f_size" name="slp_login_input_f_size">
                                    <?php print esc_attr("Font size"); ?>
                                </label>
                                <input type="number" name="slp_login_input_f_size" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_login_input_f_size'); ?>">
                            </div>

                            <!-- Label Color field -->
                            <div><label for="slp_label_clr" name="slp_label_clr">
                                    <?php print esc_attr("Text label color "); ?> <b>
                                        <?php print
                                            get_option('slp_label_clr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_label_clr" value="<?php print
                                    get_option('slp_label_clr'); ?>">
                            </div>

                            <!--  Label font size  -->
                            <div><label for="slp_login_label_f_size" name="slp_login_label_f_size">
                                    <?php print esc_attr("Label font size"); ?>
                                </label>
                                <input type="number" name="slp_login_label_f_size" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_login_label_f_size'); ?>">
                            </div>

                            <!-- Input padding  -->
                            <div><label for="slp_login_input_padding" name="slp_login_input_padding">
                                    <?php print esc_attr("Padding"); ?>
                                </label>
                                <input type="number" name="slp_login_input_padding" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_login_input_padding'); ?>">
                            </div>

                            <!-- input left border Color -->
                            <div><label for="slp_borderLeft_clr" name="slp_borderLeft_clr">
                                    <?php print esc_attr("Border color "); ?> <b>
                                        <?php print
                                            get_option('slp_borderLeft_clr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_borderLeft_clr" value="<?php print
                                    get_option('slp_borderLeft_clr'); ?>">
                            </div>

                            <!-- Input border  -->
                            <div><label for="slp_login_input_border" name="slp_login_input_border">
                                    <?php print esc_attr("Border (left)"); ?>
                                </label>
                                <input type="number" name="slp_login_input_border" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_login_input_border'); ?>">
                            </div>

                            <!-- Input rounded / border-radius  -->
                            <div><label for="slp_login_input_round" name="slp_login_input_round">
                                    <?php print esc_attr("Border radius"); ?>
                                </label>
                                <input type="number" name="slp_login_input_round" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_login_input_round'); ?>">
                            </div>

                        </div>


                        <!--
                            ============= Button style ===================
                        -->

                        <h3 class="slp_section_title">Button style</h3>
                        <div class="slp_elements_grid">

                            <!-- button text color -->
                            <div><label for="slp_loginBtn_txtClr" name="slp_loginBtn_clr">
                                    <?php print esc_attr("Text color "); ?> <b>
                                        <?php print
                                            get_option('slp_loginBtn_txtClr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_loginBtn_txtClr" value="<?php print
                                    get_option('slp_loginBtn_txtClr'); ?>">
                            </div>

                            <!-- Hover - button text color -->
                            <div><label for="slp_loginBtn_txtClr_hover" name="slp_loginBtn_txtClr_hover">
                                    <?php print esc_attr("Hover text color "); ?> <b>
                                        <?php print
                                            get_option('slp_loginBtn_txtClr_hover'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_loginBtn_txtClr_hover" value="<?php print
                                    get_option('slp_loginBtn_txtClr_hover'); ?>">
                            </div>

                            <!-- button bg color -->
                            <div><label for="slp_loginBtn_bgClr" name="slp_loginBtn_clr">
                                    <?php print esc_attr("Background color "); ?> <b>
                                        <?php print
                                            get_option('slp_loginBtn_bgClr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_loginBtn_bgClr" value="<?php print
                                    get_option('slp_loginBtn_bgClr'); ?>">
                            </div>

                            <!-- Hover - button bg color -->
                            <div><label for=" slp_loginBtn_bgClr_hover" name="slp_loginBtn_bgClr_hover">
                                    <?php print esc_attr("Hover background color "); ?> <b>
                                        <?php print
                                            get_option('slp_loginBtn_bgClr_hover'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_loginBtn_bgClr_hover" value="<?php print
                                    get_option('slp_loginBtn_bgClr_hover'); ?>">
                            </div>

                            <!--  font size  -->
                            <div><label for="slp_login_btn_f_size" name="slp_login_btn_f_size">
                                    <?php print esc_attr("Font size"); ?>
                                </label>
                                <input type="number" name="slp_login_btn_f_size" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_login_btn_f_size'); ?>">
                            </div>

                            <!-- border Color -->
                            <div><label for="slp_logBtnBorder_clr" name="slp_logBtnBorder_clr">
                                    <?php print esc_attr("Border color "); ?> <b>
                                        <?php print
                                            get_option('slp_logBtnBorder_clr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_logBtnBorder_clr" value="<?php print
                                    get_option('slp_logBtnBorder_clr'); ?>">
                            </div>

                            <!-- Hover border Color -->
                            <div><label for="slp_logBtnBorder_clr_hover" name="slp_logBtnBorder_clr_hover">
                                    <?php print esc_attr("Hover border color "); ?> <b>
                                        <?php print
                                            get_option('slp_logBtnBorder_clr_hover'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_logBtnBorder_clr_hover" value="<?php print
                                    get_option('slp_logBtnBorder_clr_hover'); ?>">
                            </div>

                            <!--  border  -->
                            <div><label for="slp_login_btn_border" name="slp_login_btn_border">
                                    <?php print esc_attr("Border"); ?>
                                </label>
                                <input type="number" name="slp_login_btn_border" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_login_btn_border'); ?>">
                            </div>

                            <!-- button border radius -->
                            <div><label for="slp_loginBtn_round" name="slp_loginBtn_round">
                                    <?php print esc_attr("Border radius "); ?>
                                </label>
                                <input type="number" name="slp_loginBtn_round" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_loginBtn_round'); ?>">
                            </div>

                            <!-- button padding -->
                            <div><label for="slp_loginBtn_padding" name="slp_loginBtn_padding">
                                    <?php print esc_attr("Padding "); ?>
                                </label>
                                <input type="number" name="slp_loginBtn_padding" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_loginBtn_padding'); ?>">
                            </div>
                        </div>


                        <!-- 
                            =========== Forgot Password ============= 
                        -->
                        <h3 class="slp_section_title">Forgot password text style</h3>
                        <div class="slp_elements_grid">
                            <!-- text color -->
                            <div><label for="slp_loginFP_txtClr" name="slp_loginBtn_clr">
                                    <?php print esc_attr("Text color "); ?> <b>
                                        <?php print
                                            get_option('slp_loginFP_txtClr'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_loginFP_txtClr" value="<?php print
                                    get_option('slp_loginFP_txtClr'); ?>">
                            </div>

                            <!-- Hover - text color -->
                            <div><label for="slp_loginFP_txtClr_hover" name="slp_loginBtn_clr">
                                    <?php print esc_attr("Hover text color "); ?> <b>
                                        <?php print
                                            get_option('slp_loginFP_txtClr_hover'); ?>
                                    </b>
                                </label>
                                <input type="color" name="slp_loginFP_txtClr_hover" value="<?php print
                                    get_option('slp_loginFP_txtClr_hover'); ?>">
                            </div>

                            <!--  font size  -->
                            <div><label for="slp_loginFP_txtSize" name="slp_loginFP_txtSize">
                                    <?php print esc_attr("Font size"); ?>
                                </label>
                                <input type="number" name="slp_loginFP_txtSize" min="0" max="100" placeholder="0" value="<?php print
                                    get_option('slp_loginFP_txtSize'); ?>">
                            </div>
                        </div>


                        <!--============= Custom css ===================-->
                        <h3 class="slp_section_title">Custom CSS</h3>
                        <div>
                            <!-- Custom CSS -->
                            <div>
                                <small>The CSS will be worked only on the admin login page.</small>
                                <textarea name="slp_login_Cus_css" rows="10" style="width: 100%; margin-top: 5px;"
                                    placeholder="/* write your CSS. */
.example{
    padding: 10px;
}
" value="                                                                                                                                                                                                                                                                                                                                                                                        <?php print
        get_option('slp_login_Cus_css'); ?>"><?php print
         get_option('slp_login_Cus_css'); ?></textarea>
                            </div>
                        </div>


                        <!-- Default input / must use -->
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="page_options"
                            value="slp_borderLeft_clr, slp_label_clr, slp_login_logo, slp_loginLogo_round, slp_login_logo_border, slp_loginLogo_padding, slp_logBorder_clr, slp_login_bg_img,slp_login_bgx_overlay, slp_login_bg_bright, slp_login_input_round, slp_login_input_clr, slp_login_input_border, slp_login_input_padding, slp_login_input_f_size, slp_login_label_f_size,  slp_loginBox_clr, slp_loginBox_padding, slp_loginBox_border, slp_loginBox_round, slp_loginBox_bdrClr, slp_loginBtn_txtClr, slp_loginBtn_bgClr, slp_login_btn_f_size, slp_loginBtn_round, slp_loginBtn_txtClr_hover, slp_logBtnBorder_clr, slp_loginBtn_bgClr_hover, slp_login_btn_border, slp_logBtnBorder_clr_hover, slp_loginBtn_padding, slp_loginBox_color_bright, slp_loginFP_txtClr, slp_loginFP_txtClr_hover, slp_loginFP_txtSize, slp_login_Cus_css">
                        <!-- Submit Btn -->
                        <input type="submit" class="slp_submit_btn" value="<?php _e('Save Changes', 'slp') ?>">

                    </form>
                </div>
                <!-- END - body area -->
        </div>





        <!-- Sidebar section-->
        <div id="slp_sidebar_area">
            <div class="slp_sticky_preview">
                <div>
                    <div class="slp_sidebar_preview_heading">
                        <h1>Live Privew</h1>
                    </div>

                    <div id="slp_sidebar_preview">
                        <div class="slp_pv_login_box">
                            <!--====================== Logo ===============-->
                            <div class="slp_pv_login_logo">
                                <img src="<?php
                                // Logo image address
                                $slp_logo_html = get_custom_logo(); // Get the logo HTML
                                preg_match('/src="([^"]*)"/i', $slp_logo_html, $matches); // Extract the logo URL from the HTML
                                $slp_logo_url = $matches[1]; // Get the first match (i.e., the logo URL)
                                // END
                            
                                $slp_logo = get_option('slp_login_logo');
                                if (!$slp_logo) {
                                    echo $slp_logo_url; // Output the logo URL
                                } else {
                                    print get_option('slp_login_logo');
                                }
                                ?>" alt="logo">
                            </div>


                            <!-- Input -->
                            <div class="slp_pv_login_input">
                                <div>
                                    <label>Username or Email Address</label>
                                    <input type="text">
                                </div>

                                <div>
                                    <label>Password</label>
                                    <input type="password">
                                </div>

                                <div>
                                    <input type="checkbox" readonly style="width: 1rem !important;">
                                    <label>Remember Me</label>
                                </div>

                                <input type="submit" readonly value="Log In">
                                <div class="slp_fg_pass_wp">
                                    <span readonly>Lost your password?</span>
                                    <a readonly>← Go to Wordpress</a>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>

                <!-- Author details  -->
                <div class="slp_author_details">
                    <h1>Author Details</h1>
                    <div class="slp_author_details_grid">
                        <div class="slp_author_discrip">
                            <p>Hi, I am <b><a href="https://www.linkedin.com/in/deve-rakib/">Rakib Hossen</a></b> and I have
                                been in the field of web design & development for the
                                last 3 years. Throughout my career, I have developed a range of business websites,
                                e-commerce, and custom web applications. I’m desiccated to helping you turn your personal or
                                business ideas into successful projects. My approach to work is professional and I will give
                                your business the same level of attention and respect as I would my own.</p>

                            <div class="slp_add_social">
                                <a href="https://www.facebook.com/rakib116" target="_blank"><img
                                        src="<?php print plugins_url('/img/facebook.png', __FILE__); ?>" alt="facebook"></a>
                                <a href="https://twitter.com/deve_rakib" target="_blank"><img
                                        src="<?php print plugins_url('/img/twitter.png', __FILE__); ?>" alt="twitter"></a>
                                <a href="https://www.instagram.com/rakib___hossen_/" target="_blank"><img
                                        src="<?php print plugins_url('/img/instagram.png', __FILE__); ?>"
                                        alt="instagram"></a>
                                <a href="https://www.linkedin.com/in/deve-rakib/" target="_blank"><img
                                        src="<?php print plugins_url('/img/linkedin.png', __FILE__); ?>" alt="linkedin"></a>
                            </div>
                        </div>

                        <div class="slp_author_img">
                            <img src="<?php print plugins_url('/img/rakib-hossen.jpg', __FILE__); ?>" alt="Rakib Hossen">

                            <div class="slp_buy_me_a_coffee">
                                <a href="https://www.buymeacoffee.com/rakibhossen" target="_blank">
                                    <img src="<?php print plugins_url('/img/buy-me-a-coffe.png', __FILE__); ?>"
                                        alt="Buy Me a Coffe">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <!-- END - main container -->
    </div>

    <!-- END - create page function -->
<?php }


// Inclding css for login page
function slp_login_style()
{
    wp_enqueue_style('slp_login_style', plugins_url('css/slp_loging_page.css', __FILE__), false, '1.0.0');
}
add_action('login_enqueue_scripts', 'slp_login_style');
// END - Inclding css


// Change Options for login page
function slp_login_pageStyle_change()
{ ?>
    <style>
        /* ========= logo style =============*/

        /* Logo change */
        #login h1 a,
        .login h1 a {
            background-image: url(<?php
            // Logo image address
            $slp_logo_html = get_custom_logo(); // Get the logo HTML
            preg_match('/src="([^"]*)"/i', $slp_logo_html, $matches); // Extract the logo URL from the HTML
            $slp_logo_url = $matches[1]; // Get the first match (i.e., the logo URL)
            // END
        
            $slp_logo = get_option('slp_login_logo');
            if (!$slp_logo) {
                echo $slp_logo_url; // Output the logo URL
            } else {
                print get_option('slp_login_logo');
            }
            ?>) !important;


            border-radius:
            <?php print get_option('slp_loginLogo_round') . 'px';
            ?>
            !important;
            border:
            <?php print get_option('slp_login_logo_border') . 'px solid';
            ?>
            /* size (px) */
            <?php print get_option(' slp_logBorder_clr');
            ?>
            /* color */
            !important;
            padding:
            <?php print get_option('slp_loginLogo_padding') . 'px';
            ?>
            !important;
        }



        /* ============= Background image style ============== */

        /* Background image change */
        body.login {
            background-image: url(<?php
            $slp_logo = get_option('slp_login_bg_img');
            if (!$slp_logo) {
                echo 'https://cdn.wallpapersafari.com/26/72/4x6ZgJ.jpg';
            } else {
                print get_option('slp_login_bg_img');
            }
            ?>) !important;
        }

        /* Brightness */
        body.login::before {
            opacity:
                <?php print get_option('slp_login_bg_bright');
                ?>
                !important;
            background:
                <?php print get_option('slp_login_bgx_overlay');
                ?>
                !important;
        }



        /*========= Login Box style ===========*/

        body.login #login::before {
            background:
                <?php print get_option('slp_loginBox_clr');
                ?>
                !important;
            padding:
                <?php print get_option('slp_loginBox_padding') . 'px';
                ?>
                !important;
            border:
                <?php print get_option('slp_loginBox_border') . 'px solid';
                ?>
                /* size (px) */
                <?php print get_option(' slp_loginBox_bdrClr');
                ?>
                /* color */
                !important;
            border-radius:
                <?php print get_option('slp_loginBox_round') . 'px';
                ?>
                !important;
            opacity:
                <?php print get_option('slp_loginBox_color_bright');
                ?>
                !important;
        }



        /*========= Login Input style ===========*/

        /* border left color */
        .login #login_error,
        .login .message,
        .login .success,
        input#user_login,
        input#user_pass {
            border-radius:
                <?php print get_option('slp_login_input_round') . 'px';
                ?>
                !important;
            border-left:
                <?php print get_option('slp_login_input_border') . 'px solid';
                print get_option(' slp_borderLeft_clr') . ' !important;'; ?>
                font-size:
                <?php print get_option('slp_login_input_f_size') . 'px !important;'; ?>
                color:
                <?php print get_option('slp_login_input_clr') . ' !important;';
                ?>


        }

        /* Label color */
        .login label {
            color:
                <?php print get_option('slp_label_clr');
                ?>
                !important;
            font-size:
                <?php print get_option('slp_login_label_f_size') . 'px !important;'; ?>

        }

        /* Input style */
        input#user_login,
        input#user_pass {
            padding:
                <?php print get_option('slp_login_input_padding') . 'px';
                ?>
                !important;
        }




        /*=========== Login button style ============*/

        #login form p.submit input,
        .login #backtoblog a {
            color:
                <?php print get_option('slp_loginBtn_txtClr');
                ?>
                !important;
            background:
                <?php print get_option('slp_loginBtn_bgClr');
                ?>
                !important;
            border-radius:
                <?php print get_option('slp_loginBtn_round') . 'px';
                ?>
                !important;
            border:
                <?php print get_option('slp_login_btn_border') . 'px solid';
                ?>
                /* size (px) */
                <?php print get_option('slp_logBtnBorder_clr');
                ?>
                /* color */
                !important;
            padding:
                <?php print get_option('slp_loginBtn_padding') . 'px';
                ?>
                !important;
        }

        #login form p.submit input {
            font-size:
                <?php print get_option('slp_login_btn_f_size') . 'px !important;'; ?>

        }

        .login #login #backtoblog a {
            padding:
                <?php print get_option('slp_loginBtn_padding') . 'px ';
                print get_option('slp_loginBtn_padding') * 2 . 'px !important;'; ?>


        }

        #login form p.submit input:hover,
        .login #backtoblog a:hover {
            color:
                <?php print get_option('slp_loginBtn_txtClr_hover');
                ?>
                !important;
            background:
                <?php print get_option('slp_loginBtn_bgClr_hover');
                ?>
                !important;
            border:
                <?php print get_option('slp_login_btn_border') . 'px solid';
                ?>
                /* size (px) */
                <?php print get_option('slp_logBtnBorder_clr_hover');
                ?>
                /* color */
                !important;
        }


        /* ============= Forgot Password ====================*/

        .login #nav a {
            color:
                <?php print get_option('slp_loginFP_txtClr');
                ?>
                !important;
            font-size:
                <?php print get_option('slp_loginFP_txtSize') . 'px';
                ?>
                !important;
        }

        .login #nav a:hover {
            color:
                <?php print get_option('slp_loginFP_txtClr_hover');
                ?>
                !important;
            transition: all .2s ease-in-out;
        }
    </style>
    <style>
        <?php print
            get_option('slp_login_Cus_css'); ?>
    </style>
<?php }
add_action('login_enqueue_scripts', 'slp_login_pageStyle_change');





/** 
============ admin page preview system style  =============== 
*/
// admin page - Preview section - Inclding css
function slp_admin_preview_style()
{ ?>
    <style>
        /*========== Logo ===========*/

        #slp_sidebar_preview .slp_pv_login_logo {
            border:
                <?php print get_option('slp_login_logo_border') . 'px solid';
                ?>
                /* size (px) */
                <?php print get_option(' slp_logBorder_clr');
                ?>
                /* color */
                !important;
            border-radius:
                <?php print get_option('slp_loginLogo_round') . 'px';
                ?>
                !important;
            padding:
                <?php print get_option('slp_loginLogo_padding') . 'px';
                ?>
                !important;
        }




        /**============ background image =================*/

        #slp_sidebar_preview {
            background-image: url(<?php
            $slp_logo = get_option('slp_login_bg_img');
            if (!$slp_logo) {
                echo 'https://cdn.wallpapersafari.com/26/72/4x6ZgJ.jpg';
            } else {
                print get_option('slp_login_bg_img');
            }
            ?>) !important;
        }

        #slp_sidebar_preview::before {
            opacity:
                <?php print get_option('slp_login_bg_bright');
                ?>
                !important;
            background:
                <?php print get_option('slp_login_bgx_overlay');
                ?>
                !important;
        }



        /*
                                                                                                                       ========= Login Box style ===========
                                                                                                                                                                        */
        #slp_sidebar_preview .slp_pv_login_box::before {
            background:
                <?php print get_option('slp_loginBox_clr');
                ?>
                !important;
            opacity:
                <?php print get_option('slp_loginBox_color_bright');
                ?>
                !important;
            border:
                <?php print get_option('slp_loginBox_border') . 'px solid';
                ?>
                /* size (px) */
                <?php print get_option(' slp_loginBox_bdrClr');
                ?>
                /* color */
                !important;
            border-radius:
                <?php print get_option('slp_loginBox_round') . 'px';
                ?>
                !important;
            padding:
                <?php print get_option('slp_loginBox_padding') . 'px';
                ?>
                !important;
        }



        /*
                                                                                                                      ============ input style  =============
                                                                                                                                                                        */
        #slp_sidebar_preview .slp_pv_login_input input[type="text"],
        #slp_sidebar_preview .slp_pv_login_input input[type="password"] {
            border-left:
                <?php print get_option('slp_login_input_border') . 'px solid';
                ?>
                /* size (px) */
                <?php print get_option(' slp_borderLeft_clr');
                ?>
                /* color */
                !important;
            border-radius:
                <?php print get_option('slp_login_input_round') . 'px';
                ?>
                !important;
            padding:
                <?php print get_option('slp_login_input_padding') . 'px';
                ?>
                !important;
            font-size:
                <?php print get_option('slp_login_input_f_size') . 'px !important;'; ?>

        }


        /* ============ input label ============ */

        #slp_sidebar_preview .slp_pv_login_input label {
            color:
                <?php print get_option(' slp_label_clr');
                ?>
                !important;
        }



        /* =========== Button style =========== */
        #slp_sidebar_preview .slp_pv_login_input input[type="submit"],
        .slp_fg_pass_wp a {
            color:
                <?php print get_option(' slp_loginBtn_txtClr');
                ?>
                !important;
            background:
                <?php print get_option('slp_loginBtn_bgClr');
                ?>
                !important;
            border:
                <?php print get_option('slp_login_btn_border') . 'px solid';
                ?>
                /* size (px) */
                <?php print get_option(' slp_logBtnBorder_clr');
                ?>
                /* color */
                !important;
            border-radius:
                <?php print get_option('slp_loginBtn_round') . 'px';
                ?>
                !important;
            padding:
                <?php print get_option('slp_loginBtn_padding') * 2 . 'px';
                ?>
                !important;
        }

        #slp_sidebar_preview .slp_pv_login_input input[type="submit"] {
            font-size:
                <?php print get_option('slp_login_btn_f_size') . 'px !important;'; ?>
        }

        .slp_fg_pass_wp a {
            padding:
                <?php print get_option('slp_loginBtn_padding') / 2 + 2 . 'px ';
                print get_option('slp_loginBtn_padding') * 2 . 'px';
                ?>
                !important;
        }

        /* Hover - button */
        #slp_sidebar_preview .slp_pv_login_input input[type="submit"]:hover,
        .slp_fg_pass_wp a:hover {
            color:
                <?php print get_option(' slp_loginBtn_txtClr_hover');
                ?>
                !important;
            background:
                <?php print get_option('slp_loginBtn_bgClr_hover');
                ?>
                !important;
            border:
                <?php print get_option('slp_login_btn_border') . 'px solid';
                ?>
                /* size (px) */
                <?php print get_option(' slp_logBtnBorder_clr_hover');
                ?>
                /* color */
                !important;
        }


        /* =========== Forgot Password ============== */

        .slp_fg_pass_wp span {
            color:
                <?php print get_option('slp_loginFP_txtClr');
                ?>
                !important;
            font-size:
                <?php print get_option('slp_loginFP_txtSize') . 'px';
                ?>
                !important;
        }

        /* Hover - Forgot Password */
        .slp_fg_pass_wp span:hover {
            color:
                <?php print get_option('slp_loginFP_txtClr_hover');
                ?>
                !important;
        }
    </style>
<?php }
add_action('admin_enqueue_scripts', 'slp_admin_preview_style');
// END -  Inclding preview css




// Change URL from logo on the login page
function slp_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'slp_login_logo_url');






// END - PHP
?>