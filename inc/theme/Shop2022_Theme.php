<?php


if (!class_exists('Shop2022_Theme')) {
    /**
     * Main theme class
     */
    class Shop2022_Theme
    {
        public $version;

        public function __construct(string $version)
        {

            $this->version = $version;

            add_action('wp_enqueue_scripts', [$this,'enqueue_scripts'], 101);
        }

        /**
         * Enqueue scripts and css stylesheet
         *
         * @return void
         */
        public function enqueue_scripts(): void
        {
            if (!is_admin()) {
                $jsFilePath = glob(get_template_directory() . '/build/main.min.*.js');
                $jsFileURI = get_template_directory_uri() . '/build/' . basename($jsFilePath[0]);
                wp_enqueue_script('main_js', $jsFileURI, [], null, true);
                $cssFilePath = glob(get_template_directory() . '/build/main.min.*.css');
                $cssFileURI = get_template_directory_uri() . '/build/' . basename($cssFilePath[0]);
                wp_enqueue_style('main_css', $cssFileURI, [], '1.0.0', 'all');
            }
        }

        /**
         * Register theme contant
         *
         * @return void
         */
        protected function register_constants(): void
        {

        }
    }
}