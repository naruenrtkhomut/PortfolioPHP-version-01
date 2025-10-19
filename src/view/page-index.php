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
         * loading project on slice
         * @return string
         */
        public static function LoadingProjectSlice(): string {
            return (
                '<div content-detail-project id="projectSlice" class="carousel slide">'.
                '<div class="carousel-inner">'.
                join(
                    separator: "",
                    array: array_map(
                        callback: fn($getData) => (
                            '<div onclick="window.location.assign(\''.($getData["link"]).'\');" class="carousel-item '.(($getData["name"] === "Camera tracking syste" ? "active" : "")).'">'.
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
                ).
                '</div>'.
                '<button class="carousel-control-prev" type="button" data-bs-target="#projectSlice" data-bs-slide="prev">'.
                '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'.
                '<span class="visually-hidden">Previous</span>'.
                '</button>'.
                '<button class="carousel-control-next" type="button" data-bs-target="#projectSlice" data-bs-slide="next">'.
                '<span class="carousel-control-next-icon" aria-hidden="true"></span>'.
                '<span class="visually-hidden">Next</span>'.
                '</button>'.
                '</div>'
            );
        }
    }
?>