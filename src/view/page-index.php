<?php
    /**
     * class of page index view
     */
    class PageIndexView {
        /**
         * loading content
         * @return string
         */
        public static function LoadingContent(): string {
            return (
                (
                    '<div content-detail-header>'.(PageIndex_MODEL::HEADER->Value()).'</div>'
                ).
                (
                    '<div content-detail-content01>'.(PageIndex_MODEL::CONTENT_01->Value()).'</div>'
                ).
                (
                    '<div content-detail-content02>'.(PageIndex_MODEL::CONTENT_02->Value()).'</div>'
                )
            );
        }

        /**
         * loading project
         * @return string
         */
        public static function LoadingProjects(): string {
            return join(
                separator: "",
                array: array_map(
                    callback: fn($getData) => (
                        '<div class="carousel-item '.(($getData["name"] === "Camera tracking syste" ? "active" : "")).'">'.
                        '<div project-item>'.($getData["name"]).'</div>'.
                        '<div class="d-flex justify-content-center gap-2 w-75 mx-auto">'.(join(
                            separator: "",
                            array: array_map(
                                callback: fn($getSVG) => '<img src="/public/image/tech-skills/'.($getSVG).'" width="10%"/>',
                                array: $getData["svg"] ?? array()
                            )
                        )).'</div>'.
                        '</div>'
                    ),
                    array: Page_MODEL::PROJECTS->Value()
                )
            );
        }
    }
?>