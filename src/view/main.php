<?php
    /**
     * class of main view
     */
    class MainView {
        /**
         * loading head of document
         * @param bool $setFavicon
         * @param bool $setBootstrap
         * @param bool $setJQuery
         * @param array $setCSS
         * @param array $setScript
         * @return string
         */
        public static function LoadingHead(
            bool $setFavicon = false,
            bool $setBootstrap = false,
            bool $setJQuery = false,
            array $setCSS = array(),
            array $setScript = array()
        ): string {
            return (
                ('<meta charset="UTF-8">').
                ('<meta name="viewport" content="width=device-width, initial-scale=1.0">').
                ('<title>'.(Page_MODEL::TITLE->Value()).'</title>').
                (
                    $setFavicon === true
                    ? ('<link rel="icon" type="image/x-icon" href="'.(Page_MODEL::FAVICON->Value()).'">')
                    : ''
                ).
                (
                    $setBootstrap === true
                    ? (
                        '<link rel="stylesheet" href="'.(Page_MODEL::BOOTSTRAP->Value()["css"]["link"]).'" integrity="'.(Page_MODEL::BOOTSTRAP->Value()["css"]["integrity"]).'" crossorigin="anonymous">'.
                        '<script src="'.(Page_MODEL::BOOTSTRAP->Value()["js"]["link"]).'" integrity="'.(Page_MODEL::BOOTSTRAP->Value()["js"]["integrity"]).'" crossorigin="anonymous"></script>'
                    )
                    : ''
                ).
                (
                    $setJQuery === true
                    ? (
                        '<script src="'.(Page_MODEL::JQUERY->Value()).'"></script>'
                    )
                    : ''
                ).
                (
                    join(
                        separator: "",
                        array: array_map(
                            callback: fn($getCSS) => '<link ref="stylesheet" href="'.($getCSS).'">',
                            array: $setCSS
                        )
                    )
                ).
                (
                    join(
                        separator: "",
                        array: array_map(
                            callback: fn($getScript) => '<script>'.($getScript).'</script>',
                            array: $setScript
                        )
                    )
                )
            );
        }

        /**
         * loading header menu
         * @return string
         */
        public static function LoadingHeaderMenu(): string {
            return (
                '<nav class="navbar navbar-dark navbar-expand-lg">'.
                '<div class="container-fluid">'.
                '<a class="navbar-brand fs-2" href="/">'.
                Page_MODEL::HEADER_NAME->Value().
                '</a>'.
                '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#appMenuDrop" aria-controls="appMenuDrop" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>'.
                '<div class="collapse navbar-collapse" id="appMenuDrop">'.
                '<ul class="navbar-nav ms-auto">'.
                join(
                    separator: "",
                    array: array_map(
                        callback: fn($getMenu) => '<li class="nav-item"><a class="nav-link fs-4" href="'.($getMenu["link"]).'">'.($getMenu["name"]).'</a></li>',
                        array: Page_MODEL::HEADER_MENU->Value()
                    )
                ).
                '</ul>'.
                '</div>'.
                '</div>'.
                '</nav>'
            );
        }

        /**
         * loading copy right
         * @return string
         */
        public static function LoadingCopyRight(): string {
            return Page_MODEL::COPY_RIGHT->Value();
        }

        /**
         * loading tech skill images
         * @param string $setPath
         * @return string
         */
        public static function LoadingTechSkillImages(
            string $setPath
        ): string {
            return (
                is_dir(filename: $setPath)
                ? join(
                    separator: "",
                    array: array_map(
                        callback: fn($getSVG) => '<img src="'.(($setPath).'/'.($getSVG)).'" height="100%"/>',
                        array: array_filter(
                            array: scandir(
                                directory: $setPath
                            ),
                            callback: fn($getFile) => pathinfo(
                                path: $getFile,
                                flags: PATHINFO_EXTENSION
                            ) === "svg"
                        )
                    )
                )
                : ''
            );
        }
    }
?>