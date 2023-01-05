<?php

/**
 * Redirect Forms Elementor
 *
 * @package           Redirect Forms Elementor
 * @author            Zain Hassan
 *
 */
   


/**
 * Elementor List Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class forms_widget_custom_elementor  extends \Elementor\Widget_Base {
	

	public function get_style_depends() {

		//wp_register_style( 'dropDown-style', plugins_url( 'assets/css/dropdown.css', __FILE__ ) );

		return [
			//'dropDown-style',
		];

	}
	

	/**
	 * Get widget name.
	 *
	 * Retrieve company widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'Redirect Form';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve company widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Redirect Form', 'redirect-forms' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve company widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-wordpress';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the company of categories the company widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'el-customWidgets' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the company of keywords the company widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'custom', 'forms', 'redirect' ];
	}


	/**
	 * Register company widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Redirect Form', 'redirect-forms' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
	


		$this->end_controls_section();


	}

	/**
	 * Render company widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();


		
        ?>
		<style id="wp-custom-css">
			.page-id-6377 p {
                margin-bottom: 20px;
            }
            .row.ser-1 {
                width: 100%;
                float: left;
                margin-bottom:40px;
            }
            .ser-1 .col-sm-6 {
                float: left;
                width: calc(50% - 10px);
                margin: 5px;
            }
            .ast-single-post .entry-title, .page-title {
                font-weight: 900;
            }
            .elementor-widget.elementor-list-item-link-full_width a {
                width: 100%;
                text-decoration: none;
            }

            .quote-form {
                max-width: 300px;
                width: 100%;
                margin: 0 auto;
            }

            .quote-form.large {
                max-width: 700px;
            }

            .quote-form select,
            .quote-form input {
                width: 100%;
            }

            .quote-form-title {
                background-color:#1F1B50;
                padding: 20px;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }

            .quote-form-title h2 {
                color:#fff;
                text-align:center;

            }

            .quote-form-body {
                background:#526EFF;
                color:#fff;
                padding: 20px 40px;
                text-align: center;
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 4px;
            }

            .box-desc-left .elementor-image-box-description{
                text-align:left
            }
            @media screen and (min-width:320px) and (max-width:767px){
                .ser-1 .col-sm-6 {
                    width: calc(100% - 10px);
                }
                .ser-map iframe {
                    width: 100%;
                }
            }		
        </style>
        <form class="quote-form rounded large">
            <div class="quote-form-title">
                <h2>Health Dental Vision Insurance Quote</h2>
            </div>
            <div class="quote-form-body">
                <p>Compare Health Insurance Online Now</p>
                <div class="form-group" style="margin-bottom: 15px">
                <input type="number" class="form-control" name="zipcode" placeholder="Enter your zip code">
                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
                <div class="form-group" style="margin-bottom: 15px">
                    <select name="redirectUrl" class="form-control">
                        <option value="https://www.healthsherpa.com/?_agent_id=blake-nwosu">Health Insurance</option>
                        <option value="https://www.uhone.com/shop/#/census?brokerid=AA4509053">Short-Term Medical</option>
                        <option value="https://www.uhone.com/shop/#/census?brokerid=AA4509053">Vision</option>
                        <option value="https://www.uhone.com/shop/#/census?brokerid=AA4509053">Dental</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary getQuoteBtn">Get Quote</button>

                <script type="text/javascript">
                    jQuery('.getQuoteBtn').on('click', function(e){
                        const $form = jQuery(this).parents('.quote-form-body');
                        const redirectUrl = $form.find('[name=redirectUrl]').val();
                        const zipCode = $form.find('[name=zipcode]').val();
                        if(zipCode) {
                            window.location.href = `${redirectUrl}&zip_code=${zipCode}`;
                        } else {
                            window.location.href = `${redirectUrl}`;
                        }
                        e.preventDefault();
                    });
                </script>
            </div>
        </form>
        <?php
	}


}