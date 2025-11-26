<?php
$pro_purchase_url = "https://trendthemeswp.com/products/bizento-pro";
$doc_url = "https://trendthemeswp.com/products/bizento-pro";
$live_demo_url = "https://demos.trendthemeswp.com/bizento-pro/";
$support_url = "https://trendthemeswp.com/contact-us/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
?>
<div class="bizento--about-page--wrapper">
    <div id="bizento-admin-about-page">
        <div class="bizento-admin-card-header">
            <div class="bizento-header-left">
                <h2>
                    <?php echo esc_html( $theme->Name ); ?>
                </h2>
                <p>
                    <?php esc_html_e( 'Bizento - A Multipurpose, browser & device-friendly Full Site Editing Theme for WordPress', 'bizento' ); ?>
                </p>

            </div>
            <div class="bizento-header-right">
                <div class="bizento-card-header-button-group">
                    <a href="<?php echo $live_demo_url; ?>" class="bizento-admin-button premium-button" target="_blank"
                        rel="noreferrer"><span class="dashicons dashicons-book-alt"></span>
                        <?php esc_html_e( 'Pro Live Demo', 'bizento' ); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="feature-list">
            <div class="bizento-about-container">
                <div class="bizento-admin-card features">
                    <div class="bizento-about-container bizento-compare-table">
                        <div class="admin-grid-1">
                            <h3>
                                <?php echo esc_html( $free_theme_name ); ?>
                                <?php esc_html_e( 'Free Vs Pro', 'bizento' ); ?>
                            </h3>
                            <p class="bizento-compare-table-subtitle"><a href="<?php echo $pro_purchase_url; ?>"
                                    target="__blank">
                                    <?php echo esc_html( 'Get Bizento Pro', 'bizento' ); ?>
                                    <i class="dashicons dashicons-arrow-right-alt"></i>
                                </a></p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <?php echo esc_html( $theme->Name ); ?>
                                            <?php esc_html_e( 'Free', 'bizento' ); ?>
                                            <?php esc_html_e( '( Limited blocks available )', 'bizento' ); ?>
                                            
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'Features', 'bizento' ); ?>
                                        </th>
                                        <th>
                                            <?php esc_html_e( 'bizento Pro ( More Blocks & Settings available )', 'bizento' ); ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Easy Setup', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Responsive Desgin', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'SEO Friendly', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( '24/7 premium support', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'High-Priority Dedicated Support', 'bizento' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no">Limited</span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Block Patterns', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span><?php esc_html_e( '50+', 'bizento' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Secure transaction', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Lifetime Updates', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'No coding required', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                    <span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Better Customization Without Code', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Advanced Templates', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Multiple Header/Footer Layouts', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                            
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Global Style Variations', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
     
                               
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Frequent Updates', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Drag and Drop functionality', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    
                       
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'bizento' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Typography and color options', 'bizento' ); ?>
                                        </td>
                                        <td><?php esc_html_e( 'Unlimited', 'bizento' ); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php esc_html_e( 'Limited', 'bizento' ); ?>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Import components/ templates', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'One Click Demo Import', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Gutenberg block editor', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                           
                                    
                                    
                                    <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Enable Sticky Header', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                              
                                     <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Animation', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>

                                     <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Scroll to Top Button', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                
                                        <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Icon Picker', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td><span class="dashicons dashicons-no"></span>
                                        </td>
                                        <td>
                                            <?php esc_html_e( 'Portfolio Pattern', 'bizento' ); ?>
                                        </td>
                                        <td><span class="dashicons dashicons-yes"></span>
                                        </td>
                                    </tr>
                                 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bizento-about-side">
                <div class="bizento-admin-card cart-two">
                    <h3 class="bizento-admin-card-title is-small">
                        <?php esc_html_e( 'Questions Welcome - We\'re here to help', 'bizento' ); ?>
                    </h3>
                    <p>
                        <?php esc_html_e( '"Fearless Setup - Our Dedicated Team will have your website up in minutes', 'bizento' ); ?>
                    </p><a href="<?php echo $support_url; ?>" class="bizento-admin-button primary large"
                        target="_blank">
                        <?php esc_html_e( 'Get Support', 'bizento' ); ?>
                    </a>
                    <a href="<?php echo $pro_purchase_url; ?>" class="bizento-admin-button primary large"
                        target="_blank">
                        <?php esc_html_e( 'Get Premium Version', 'bizento' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>