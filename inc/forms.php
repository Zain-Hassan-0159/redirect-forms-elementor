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

		$this->add_control(
			'widget_title',
			[
				'label' => esc_html__( 'Title', 'redirect-forms' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'redirect-forms' ),
				'placeholder' => esc_html__( 'Type your title here', 'redirect-forms' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'widget_subtitle',
			[
				'label' => esc_html__( 'Sub Title', 'redirect-forms' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default sub title', 'redirect-forms' ),
				'placeholder' => esc_html__( 'Type your title here', 'redirect-forms' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'show_options',
			[
				'label' => esc_html__( 'Show Select Options', 'redirect-forms' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'redirect-forms' ),
				'label_off' => esc_html__( 'Hide', 'redirect-forms' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'options_list',
			[
				'label' => esc_html__( 'Add Options', 'redirect-forms' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_title',
						'label' => esc_html__( 'Option', 'redirect-forms' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'List Title' , 'redirect-forms' ),
						'label_block' => true,
					],
					[
						'name' => 'redirect_link',
						'label' => esc_html__( 'Redirect Link', 'redirect-forms' ),
						'type' => \Elementor\Controls_Manager::URL,
						'placeholder' => esc_html__( 'https://your-link.com', 'redirect-forms' ),
						'options' => [ 'url', 'is_external', 'nofollow' ],
						'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
							// 'custom_attributes' => '',
						],
						'label_block' => true,
					]
				],
				'default' => [
					[
						'list_title' => esc_html__( 'Option #1', 'redirect-forms' ),
						'redirect_link' => esc_html__( 'https://your-link.com', 'redirect-forms' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
				'condition' => [
					'show_options' => 'yes',
				],
			]
		);

		$this->add_control(
			'redirect_simple_link',
			[
				'label' => esc_html__( 'Redirect Link', 'redirect-forms' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'redirect-forms' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
				'condition' => [
					'show_options!' => 'yes',
				],
			]
		);

		$this->add_control(
			'widget_button',
			[
				'label' => esc_html__( 'Button Text', 'redirect-forms' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get Quote', 'redirect-forms' ),
				'placeholder' => esc_html__( 'Type your title here', 'redirect-forms' ),
				'label_block' => true,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Style', 'redirect-forms' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography1',
				'label' => esc_html__( 'Title Typography', 'redirect-forms' ),
				'selector' => '{{WRAPPER}} h2',
			]
		);		
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography2',
				'label' => esc_html__( 'Sub Title Typography', 'redirect-forms' ),
				'selector' => '{{WRAPPER}} p',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography3',
				'label' => esc_html__( 'Button Typography', 'redirect-forms' ),
				'selector' => '{{WRAPPER}} button.getQuoteBtn',
			]
		);

		$this->add_control(
			'button_color',
			[
				'label' => esc_html__( 'Button Color', 'redirect-forms' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} button.getQuoteBtn' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'header_color',
			[
				'label' => esc_html__( 'Header Background Color', 'redirect-forms' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .quote-form-title' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'body_color',
			[
				'label' => esc_html__( 'Body Background Color', 'redirect-forms' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .quote-form-body' => 'background-color: {{VALUE}}',
				],
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
		$redirect_link = 'yes';

		$length = 5;
		$randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
		


		
        ?>
		<style>
			
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

			.quote-form button{
				border: 0;
				outline: none;
			}
		
        </style>
        <form class="quote-form rounded large <?php echo $randomletter; ?>">
            <div class="quote-form-title">
                <h2><?php echo $settings['widget_title']; ?></h2>
            </div>
            <div class="quote-form-body">
                <p><?php echo $settings['widget_subtitle']; ?></p>
                <div class="form-group" style="margin-bottom: 15px">
                <input type="number" class="form-control" name="zipcode" placeholder="Enter your zip code">
                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
				<?php
				if($settings['show_options'] === 'yes'){
					?>
					<div class="form-group" style="margin-bottom: 15px">
						<select name="redirectUrl" class="form-control">
							<?php
							if ( $settings['options_list'] ) {
								foreach($settings['options_list'] as $item){
									?>
									<option value="<?php echo $item['redirect_link']['url'] ?>"><?php echo $item['list_title'] ?></option>
									<?php
								}

							}
							?>
						</select>
					</div>
					<?php
				}else{
					$redirect_link = $settings['redirect_simple_link']['url'];
				}
				?>

                <button type="button" class="btn btn-primary getQuoteBtn"><?php echo $settings['widget_button']; ?></button>

                <script type="text/javascript">
                    jQuery('.<?php echo $randomletter; ?> .getQuoteBtn').on('click', function(e){
                        const $form = jQuery(this).parents('.quote-form-body');
                        const redirectUrl = $form.find('[name=redirectUrl]').val();
                        const zipCode = $form.find('[name=zipcode]').val();
						if('yes' == '<?php echo $redirect_link; ?>'){
							if(zipCode) {
								// window.location.href = `${redirectUrl}&zip_code=${zipCode}`;
								window.location.href = `${redirectUrl}`;
							} else {
								window.location.href = `${redirectUrl}`;
							}
						}else{
							window.location.href = '<?php echo $redirect_link; ?>';
						}
                        e.preventDefault();
                    });
                </script>
            </div>
        </form>
        <?php
	}


}