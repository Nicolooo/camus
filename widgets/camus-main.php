<?php

// Initialize Namespace
namespace Elementor;
class camus_fd_main extends Widget_Base {

    public function get_name() {
        return  'camus_fd_widget';
    }
    public function get_title() {
        return esc_html__( 'Camus FeedBack', 'camus_fd' );
    }
    public function get_icon() {
        return 'eicon-animated-headline';
    }
    public function get_custom_help_url() {
		return 'https://wordpress.org/support/plugin/liza-spotify-widget-for-elementor/';
	}
    public function get_categories() {
        return [ 'basic' ];
    }
    public function get_style_depends() {
        return [
            'camus-style'
        ];
    }
    public function get_keywords() {
        return [ 'feedack', 'camus','message' ];
    }
    public function _register_controls() {

        // Section: General ----------
    $this->start_controls_section(
        'section_general',
        [
            'label' => esc_html__( 'General', 'camus-fd' ),
            'tab' => Controls_Manager::TAB_CONTENT,
        ]
    );

    $this->add_control(
        'telnumber',
        [
            'label' => esc_html__( 'Phone Number', 'camus-fd' ),
            'type' => Controls_Manager::TEXT,
            'default' => '123456789',
        ]
    );
    $this->add_control(
        'button_position',
        [
            'label' => esc_html__( 'Button Position', 'camus-fd' ),
            'type' => Controls_Manager::SELECT,
            'default' => 'fixed',
            'label_block' => false,
            'render_type' => 'template',
            'options' => [
                'fixed' => esc_html__( 'Fixed', 'camus-fd' ),
                'inline' => esc_html__( 'Inline', 'camus-fd' ),
                ],
            'prefix_class' => 'wpr-pc-btn-align-',
            'separator' => 'before',
        ]
    );

    $this->add_responsive_control(
        'button_position_inline',
        [
            'label' => esc_html__( 'Inline Position', 'camus-fd' ),
            'type' => Controls_Manager::CHOOSE,
            'default' => 'center',
            'label_block' => false,
            'options' => [
                'flex-start' => [
                    'title' => esc_html__( 'Left', 'camus-fd' ),
                    'icon' => 'eicon-h-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'camus-fd' ),
                    'icon' => 'eicon-h-align-center',
                ],
                'flex-end' => [
                    'title' => esc_html__( 'Right', 'camus-fd' ),
                    'icon' => 'eicon-h-align-right',
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-wrapper' => 'justify-content: {{VALUE}}',
            ],

            'separator' => 'before',
            'condition' => [
                'button_position' => 'inline',
            ],
        ]
    );
    
    $this->add_responsive_control(
        'button_position_fixed',
        [
            'label' => esc_html__( 'Fixed Position', 'camus-fd' ),
            'type' => Controls_Manager::CHOOSE,
            'default' => 'right',
            'label_block' => false,
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'camus-fd' ),
                    'icon' => 'eicon-h-align-left',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'camus-fd' ),
                    'icon' => 'eicon-h-align-right',
                ],
            ],
            'separator' => 'before',
            'default' => 'right',
            'condition' => [
                'button_position' => 'fixed',
            ],
            'prefix_class' => 'wpr-pc-btn-align-fixed-',
        ]
    );
    $this->add_responsive_control(
        'distance_x_right',
        [
            'label' => esc_html__( 'Distance Right', 'camus-fd' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 30,
            ],
            'selectors' => [
                '{{WRAPPER}}.wpr-pc-btn-align-fixed-right .wpr-pc-btn' => 'right: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'button_position' => 'fixed',
                'button_position_fixed' => 'right',
            ],
        ]
    );
    $this->add_responsive_control(
        'distance_y_right',
        [
            'label' => esc_html__( 'Distance Bottom', 'camus-fd' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 30,
            ],
            'selectors' => [
                '{{WRAPPER}}.wpr-pc-btn-align-fixed-right .wpr-pc-btn' => 'bottom: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'button_position' => 'fixed',
                'button_position_fixed' => 'right',
            ],
        ]
    );

    $this->add_responsive_control(
        'distance_x_left',
        [
            'label' => esc_html__( 'Distance Left', 'camus-fd' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 30,
            ],
            'selectors' => [
                '{{WRAPPER}}.wpr-pc-btn-align-fixed-left .wpr-pc-btn' => 'left: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'button_position' => 'fixed',
                'button_position_fixed' => 'left',
            ],
        ]
    );

    $this->add_responsive_control(
        'distance_y_left',
        [
            'label' => esc_html__( 'Distance Bottom', 'camus-fd' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 30,
            ],
            'selectors' => [
                '{{WRAPPER}}.wpr-pc-btn-align-fixed-left .wpr-pc-btn' => 'bottom: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'button_position' => 'fixed',
                'button_position_fixed' => 'left',
            ],
        ]
    );

    $this->add_control(
        'pc_icon',
        [
            'label' => esc_html__( 'Select Icon', 'camus-fd' ),
            'type' => Controls_Manager::ICONS,
            'skin' => 'inline',
            'label_block' => false,
            'default' => [
                'value' => 'fas fa-phone',
                'library' => 'fa-solid',
            ],
            'separator' => 'before',
            'recommended' => [
                'fa-solid' => [
                    'phone',
                    'phone-alt',
                    'search',
                ],
            ],
        ]
    );

    $this->add_control(
            'button_txt_show',
            [
                'label' => __( 'Button Text', 'camus-fd' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'camus-fd' ),
                'label_off' => __( 'Hide', 'camus-fd' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
    );

    $this->add_control(
        'pc_icon_layout_select',
        [
            'label' => esc_html__( 'Icon Align', 'camus-fd' ),
            'type' => Controls_Manager::SELECT,
            'default' => 'right',
            'label_block' => false,
            'options' => [
                'top' => esc_html__( 'Top', 'camus-fd' ),
                'bottom' => esc_html__( 'Bottom', 'camus-fd' ),
                'right' => esc_html__( 'Right', 'camus-fd' ),
                'left' => esc_html__( 'Left', 'camus-fd' ),
            ],
            'condition' => [
                'pc_icon[value]!' => '',
                'button_txt_show' => 'yes',
            ],
            'prefix_class' => 'wpr-pc-btn-icon-',
        ]
    );
    
    $this->add_control(
        'button_text',
        [
            'label' => esc_html__( 'Text', 'camus-fd' ),
            'type' => Controls_Manager::TEXT,
            'default' => 'Call Now',
            'condition' => [
                'button_txt_show' => 'yes',
            ],
        ]
    );

    $this->end_controls_section();
    // Section Button ------------
    $this->start_controls_section(
        'section_style_button',
        [
            'label' => esc_html__( 'Button', 'camus-fd' ),
            'tab' => Controls_Manager::TAB_STYLE,
        ]
    );


    $this->start_controls_tabs( 'tabs_pc_button_colors' );

    // Normal Tab ------------
    $this->start_controls_tab(
        'tab_pc_button_normal_colors',
        [
            'label' => esc_html__( 'Normal', 'camus-fd' ),
        ]
    );

    $this->add_control(
        'button_text_color',
        [
            'label' => esc_html__( ' Color', 'camus-fd' ),
            'type' => Controls_Manager::COLOR,
            'default' => '#ffffff',
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-content' => 'color: {{VALUE}}',
                '{{WRAPPER}} .wpr-pc-btn-icon' => 'color: {{VALUE}}',
                '{{WRAPPER}} .wpr-pc-btn-icon svg' => 'fill: {{VALUE}}',
            ],
        ]
    );
    
    $this->add_control(
        'button_bg_color',
        [
            'label' => esc_html__( 'Background', 'camus-fd' ),
            'type' => Controls_Manager::COLOR,
            'default' => '#39B54A',
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-btn' => 'background-color: {{VALUE}}',
            ],
        ]
    );
    $this->add_control(
        'button_border_color',
        [
            'label' => esc_html__( 'Border Color', 'camus-fd' ),
            'type' => Controls_Manager::COLOR,
            'default' => '#E8E8E8',
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-btn' => 'border-color: {{VALUE}}',
            ],
            'condition' =>[
                'border_switcher' => 'yes',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'button_box_shadow',
            'label' => __( 'Box Shadow', 'camus-fd' ),
            'selector' => '{{WRAPPER}} .wpr-pc-btn',
        ]
    );

    $this->end_controls_tab();// normal tab end

    // Hover Tab -------------
    $this->start_controls_tab(
        'tab_button_hover_colors',
        [
            'label' => esc_html__( 'Hover', 'camus-fd' ),
        ]
    );

    $this->add_control(
        'button_texte_color_hover',
        [
            'label' => esc_html__( 'Color', 'camus-fd' ),
            'type' => Controls_Manager::COLOR,
            'default' => '#fff',
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-btn:hover > .wpr-pc-btn-icon' => 'Color: {{VALUE}}',
            ],
        ]
    );

    $this->add_control(
        'button_bg_color_hover',
        [
            'label' => esc_html__( 'Background', 'camus-fd' ),
            'type' => Controls_Manager::COLOR,
            'default' => '#1FD538',
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-btn:hover' => 'background-color: {{VALUE}}',
            ],
        ]
    );

    $this->add_control(
        'button_border_color_hover',
        [
            'label' => esc_html__( 'Border Color', 'camus-fd' ),
            'type' => Controls_Manager::COLOR,
            'default' => '#E8E8E8',
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-btn:hover' => 'border-color: {{VALUE}}',
            ],
            'condition' =>[
                'border_switcher' => 'yes',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'button_box_shadow_hover',
            'label' => __( 'Box Shadow', 'camus-fd' ),
            'selector' => '{{WRAPPER}} .wpr-pc-btn:hover',
        ]
    );

    $this->end_controls_tab();// hover tab end

    $this->end_controls_tabs();// End tabs

    $this->add_control(
            'hover_animation_hover_duration',
            [
                'label' => __( 'Hover Animation Duration', 'camus-fd' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 0,
                'max' => 5,
                'step' => 0.1,
                'default' => 0.3,
                'selectors' => [
                    '{{WRAPPER}} .wpr-pc-btn' => 'transition:  all  {{VALUE}}s ease-in-out 0s;',
                ],
                'separator' => 'before',
            ]
        );

    // $this->add_group_control(
    //     Group_Control_Typography::get_type(),
    //     [
    //         'name' => 'button_typography',
    //         'scheme' => Typography::TYPOGRAPHY_3,
    //         'selector' => '{{WRAPPER}} .wpr-pc-content,{{WRAPPER}} .wpr-pc-content::after',
    //         'separator' => 'before',
    //         'condition' => [
    //             'button_txt_show' => 'yes',
    //         ],
    //     ]
    // );

    $this->add_control(
        'icon_size',
        [
            'label' => esc_html__( 'Icon Size', 'camus-fd' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 13,
            ],
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-btn-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .wpr-pc-btn-icon svg' => 'width: {{SIZE}}{{UNIT}};height: {{SIZE}}{{UNIT}};',
            ],
            'separator' => 'before',
            'condition' => [
                'pc_icon[value]!' => '',
            ],
        ]
    );

    $this->add_control(
        'pc_icon_distance',
        [
            'label' => esc_html__( 'Icon Distance', 'camus-fd' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['px'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 25,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 7,
            ],
            'selectors' => [
                '{{WRAPPER}}.wpr-pc-btn-icon-top .wpr-pc-btn-icon' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}}.wpr-pc-btn-icon-left .wpr-pc-btn-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}}.wpr-pc-btn-icon-right .wpr-pc-btn-icon' => 'margin-left: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}}.wpr-pc-btn-icon-bottom .wpr-pc-btn-icon' => 'margin-top: {{SIZE}}{{UNIT}};',
            ],
            'separator' => 'before',
            'condition' => [
                'pc_icon[value]!' => '',
                'button_txt_show' => 'yes',
            ],
        ]
    );

    $this->add_responsive_control(
        'button_padding',
        [
            'label' => esc_html__( 'Padding', 'camus-fd' ),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px' ],
            'default' => [
                'top' => 13,
                'right' => 14,
                'bottom' => 13,
                'left' => 14,
            ],
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'separator' => 'before',
        ]
    );

    $this->add_control(
        'border_switcher',
        [
            'label' => esc_html__( 'Border', 'camus-fd' ),
            'type' => Controls_Manager::SWITCHER,
            'separator' => 'before',
            'return_value' => 'yes',
            'label_block' => false,
            'default' => 'yes',

        ]
    );

    $this->add_control(
        'button_border_type',
        [
            'label' => esc_html__( 'Border Type', 'camus-fd' ),
            'type' => Controls_Manager::SELECT,
            'options' => [
                'none' => esc_html__( 'None', 'camus-fd' ),
                'solid' => esc_html__( 'Solid', 'camus-fd' ),
                'double' => esc_html__( 'Double', 'camus-fd' ),
                'dotted' => esc_html__( 'Dotted', 'camus-fd' ),
                'dashed' => esc_html__( 'Dashed', 'camus-fd' ),
                'groove' => esc_html__( 'Groove', 'camus-fd' ),
            ],
            'default' => 'none',
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-btn' => 'border-style: {{VALUE}};',
            ],
            'condition' =>[
                'border_switcher' => 'yes',
            ],
        ]
    );

    $this->add_responsive_control(
        'border_width',
        [
            'label' => esc_html__( 'Border Width', 'camus-fd' ),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px' ],
            'default' => [
                'top' => 1,
                'right' => 1,
                'bottom' => 1,
                'left' => 1,
            ],
            'selectors' => [
                '{{WRAPPER}} .wpr-pc-btn' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'separator' => 'before',
            'condition' =>[
                    'border_switcher' => 'yes',
                    'button_border_type!' => 'none',
            ],
        ]
    );

    $this->add_responsive_control(
            'button_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'camus-fd' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'default' => [
                    'top' => 2,
                    'right' => 2,
                    'bottom' => 2,
                    'left' => 2,
                ],
                'selectors' => [
                    '{{WRAPPER}} .wpr-pc-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' => 'after',
            ]
    );

    $this->end_controls_section();

    }
    // Render the widget
    protected function render() {
            $settings = $this->get_settings_for_display();
        echo '<div class="camus-fd">';
            echo '<a href="tel:'. esc_attr($settings['telnumber']) .'" class="camus-fd-main">';
                echo '<div class="camus-fd-main">';
                echo '<h1>lolz</h1>';
                echo '</div>';
            echo '</a>';
        echo '</div>';

    }

}
Plugin::instance()->widgets_manager->register_widget_type( new camus_fd_main() );
