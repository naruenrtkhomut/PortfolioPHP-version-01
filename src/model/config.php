<?php
    /**
     * enum interface
     * @interface
     */
    interface Enum_MODEL {
        /**
         * Name
         * @return string
         */
        public function Name(): string;
        /**
         * Value
         * @return mixed
         */
        public function Value(): mixed;
    }

    /**
     * page config
     */
    enum Page_MODEL implements Enum_MODEL {
        /**
         * page application cases
         */
        case FAVICON;
        case BOOTSTRAP;
        case JQUERY;
        case TITLE;
        case HEADER_NAME;
        case HEADER_MENU;
        case COPY_RIGHT;
        case PROJECTS;

        /**
         * getting name of model of page
         * @return string
         */
        public function Name(): string
        {
            return match($this) {
                self::FAVICON => self::FAVICON->name,
                self::BOOTSTRAP => self::BOOTSTRAP->name,
                self::JQUERY => self::JQUERY->name,
                self::TITLE => self::TITLE->name,
                self::HEADER_NAME => self::HEADER_NAME->name,
                self::HEADER_MENU => self::HEADER_MENU->name,
                self::COPY_RIGHT => self::COPY_RIGHT->name,
                self::PROJECTS => self::PROJECTS->name
            };
        }
        /**
         * getting value of model of page
         */
        public function Value(): mixed
        {
            return match($this) {
                self::FAVICON => "",
                self::BOOTSTRAP => array(
                    "css" => array(
                        "link" => "/public/lib/bootstrap-5.3.8-dist/css/bootstrap.min.css",
                        "integrity" => "sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
                    ),
                    "js" => array(
                        "link" => "/public/lib/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js",
                        "integrity" => "sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
                    )
                ),
                self::JQUERY => "/public/lib/js/jquery-3.7.1.min.js",
                self::TITLE => "Naruenat Komoot",
                self::HEADER_NAME => "Naruenat.K",
                self::HEADER_MENU => array(
                    array(
                        "name" => "Home",
                        "link" => "/"
                    ),
                    array(
                        "name" => "About",
                        "link" => "/about"
                    ),
                    array(
                        "name" => "Project",
                        "link" => "/project"
                    ),
                    array(
                        "name" => "Contract",
                        "link" => "/contract"
                    )
                    ),
                    self::COPY_RIGHT => "© 2025 Naruenat Komoot",
                    self::PROJECTS => array(
                        array(
                            "name" => "Camera tracking syste",
                            "link" => "/project/01",
                            "svg" => array(
                                "01-cs.svg",
                                "06-asp-net.svg",
                                "07-angular.svg",
                                "14-html.svg",
                                "12-bootstrap.svg",
                                "15-jquery.svg",
                                "19-mssql.svg",
                                "21-window-server.svg",
                                "28-nginx.svg"
                            )
                        ),
                        array(
                            "name" => "Car's license plate recorder",
                            "link" => "/project/02",
                            "svg" => array(
                                "01-cs.svg",
                                "06-asp-net.svg",
                                "07-angular.svg",
                                "14-html.svg",
                                "12-bootstrap.svg",
                                "15-jquery.svg",
                                "19-mssql.svg",
                                "21-window-server.svg",
                                "28-nginx.svg"
                            )
                        ),
                        array(
                            "name" => "Employee work record",
                            "link" => "/project/03",
                            "svg" => array(
                                "01-cs.svg",
                                "06-asp-net.svg",
                                "07-angular.svg",
                                "14-html.svg",
                                "12-bootstrap.svg",
                                "15-jquery.svg",
                                "18-mysql.svg",
                                "21-window-server.svg",
                                "28-nginx.svg"
                            )
                        ),
                        array(
                            "name" => "Failure analysis report finder",
                            "link" => "/project/04",
                            "svg" => array(
                                "01-cs.svg",
                            )
                        ),
                        array(
                            "name" => "Electronic circuit analysis",
                            "link" => "/project/05",
                            "svg" => array(
                                "04-python.svg",
                                "08-flask.svg",
                                "14-html.svg",
                                "15-jquery.svg",
                                "12-bootstrap.svg",
                                "20-postgresql.svg"
                            )
                        ),
                        array(
                            "name" => "Auto Failure Analysis system (FA PAS)",
                            "link" => "/project/06",
                            "svg" => array(
                                "01-cs.svg",
                                "03-php.svg",
                                "06-asp-net.svg",
                                "18-mysql.svg",
                                "11-react.svg",
                                "12-bootstrap.svg",
                                "15-jquery.svg",
                                "27-apache.svg"
                            )
                        ),
                        array(
                            "name" => "Screw recording",
                            "link" => "/project/07",
                            "svg" => array(
                                "03-php.svg",
                                "19-mssql.svg",
                                "01-cs.svg"
                            )
                        ),
                        array(
                            "name" => "Fixture real time tracking",
                            "link" => "/project/08",
                            "svg" => array(
                                "03-php.svg",
                                "19-mssql.svg",
                                "01-cs.svg"
                            )
                        ),
                        array(
                            "name" => "TE interface and pallet live status",
                            "link" => "/project/09",
                            "svg" => array(
                                "02-node.svg",
                                "10-nextjs.svg",
                                "19-mssql.svg",
                                "21-window-server.svg",
                                "28-nginx.svg"
                            )
                        )
                    )
            };
        }
    }

    /**
     * page index
     */
    enum PageIndex_MODEL implements Enum_MODEL {
        /**
         * page index application cases
         */
        case HEADER;
        case CONTENT_01;
        case CONTENT_02;

        /**
         * getting name of page index
         * @return string
         */
        public function Name(): string
        {
            return match($this) {
                self::HEADER => self::HEADER->name,
                self::CONTENT_01 => self::CONTENT_01->name,
                self::CONTENT_02 => self::CONTENT_02->name
            };
        }

        /**
         * getting value of page index
         * @return mixed
         */
        public function Value(): mixed
        {
            return match($this) {
                self::HEADER => "Naruenat Komoot",
                self::CONTENT_01 => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to my personal website! I'm Naruenat
                Komoot, a passionate developer and tech enthusiast. Here, you'll find information about my projects,
                skills, and experiences. Feel free to explore and connect with me!",
                self::CONTENT_02 => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm a developer with a passion for creating
                innovative solutions. My expertise lies in web development, and I'm always eager to learn new
                technologies."
            };
        }
    }
?>