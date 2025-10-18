<?php

/** include libs */
include_once "src/model/config.php";
include_once "src/view/main.php";
include_once "src/view/page-index.php";
?>

<!-- html document -->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    echo MainView::LoadingHead(
        setBootstrap: true,
        setJQuery: true
    );
    ?>
    <style>
        body {
            width: 100%;
            height: 100vh;
            background-color: #61002c;
        }

        @media (max-width: 575px) {}

        @media (min-width: 576px) and (max-width: 767px) {}

        @media (min-width: 768px) and (max-width: 991px) {}

        @media (min-width: 992px) and (max-width: 1199px) {}

        @media (min-width: 1200px) and (max-width: 1399px) {}

        @media (min-width: 1400px) {
            div[content] {
                position: absolute;
                width: 50%;
                height: 100vh;
                left: 0;
                top: 0;
                display: grid;
                grid-template-rows: 90vh 10vh;
            }

            div[content-detail] {
                padding-top: 10vh;
                padding-left: 50px;
                color: #ffffff;
                font-size: 1.2cqi;
            }

            div[content-detail-header] {
                font-size: 5cqi;
            }

            div[content-detail-about] {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
            }

            div[content-detail-project] {
                width: 100%;
                height: 40vh;
                margin-top: 20px;
            }
            div[project-item] {
                font-size: 2cqi;
                text-align: center;
                height: fit-content;
                margin-top: 15vh;
                margin-bottom: 20px;
            }

            div[content-skill] {
                display: block;
                color: #ffffff;
                padding-left: 50px;
            }

            div[content-skill-name] {
                font-size: 1.5cqi;
            }

            div[content-skill-image] {
                height: max-content;
                overflow-y: auto;
                -ms-overflow-style: none;
                scrollbar-width: none;
                height: 5vh;
            }

            div[content-skill-image]::-webkit-scrollbar {
                display: none;
            }

            div[content-skill-image] img {
                height: 5vh;
                margin-right: 10px;
            }
            div[app-image] {
                position: absolute;
                width: 50%;
                height: 100vh;
                top: 0;
                left: 50%;
                background-image: url("public/image/page-01.png");
                background-position: right;
                background-repeat: no-repeat;
                background-size: contain;
                z-index: -1;
            }

            div[app-copyright] {
                position: absolute;
                bottom: 10px;
                right: 10px;
                color: #ffffff;
            }
        }
    </style>
</head>

<body>
    <?php echo MainView::LoadingHeaderMenu(); ?>
    <div content>
        <div content-detail>
            <?php echo PageIndexView::LoadingContent(); ?>
            <div content-detail-about>
                <div>
                    <button class="btn btn-danger btn-lg">Learn More About Me</button>
                    <button class="btn btn-outline-light btn-lg">Resume</button>
                </div>
                <div>
                    <button class="btn btn-outline-light btn-lg">Contact</button>
                </div>
            </div>
            <div content-detail-project id="projectSlice" class="carousel slide">
                <div class="carousel-inner">
                    <?php echo PageIndexView::LoadingProjects(); ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#projectSlice" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#projectSlice" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div content-skill>
            <div content-skill-name>Tech skills(scroll down)</div>
            <div content-skill-image>
                <?php echo MainView::LoadingTechSkillImages("public/image/tech-skills/"); ?>
            </div>
        </div>
    </div>
    <div app-image></div>
    <div app-copyright><?php echo MainView::LoadingCopyRight(); ?></div>
</body>

</html>