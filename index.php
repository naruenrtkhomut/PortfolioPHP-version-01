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

        @media (max-width: 575px) {
            div[content] {
                width: 100%;
                height: 80vh;
                left: 0;
                top: 0;
                display: grid;
                grid-template-rows: 70vh 10vh;
            }
            div[content-detail] {
                padding-left: 20px;
                padding-right: 20px;
                color: #ffffff;
                font-size: 3cqi;
            }
            div[content-detail-header] {
                font-size: 7cqi;
            }
            div[content-detail-about] {
                margin-top: 20px;
                display: block;
            }
            div[content-detail-about] div {
                display: flex;
                justify-content: start;
            }
            div[content-detail-project] {
                width: 100%;
                height: 20vh;
            }
            div[project-item] {
                font-size: 5cqi;
                text-align: center;
                height: fit-content;
                margin-top: 10vh;
                transform: translateY(-50%);
            }
            div[content-skill] {
                width: 98%;
                height: 15vh;
                color: #ffffff;
                margin-left: 1%;
            }
            div[content-skill-image] {
                height: max-content;
                overflow-y: auto;
                -ms-overflow-style: none;
                scrollbar-width: none;
                height: 10vh;
            }
            div[content-skill] img {
                height: 9vh;
                margin-right: 5px;
                margin-top: 5px;
            }
            div[app-copyright] {
                position: fixed;
                bottom: 10px;
                right: 10px;
                color: #ffffff;
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            div[content] {
                width: 100%;
                height: 80vh;
                left: 0;
                top: 0;
                display: grid;
                grid-template-rows: 70vh 10vh;
            }
            div[content-detail] {
                padding-left: 20px;
                padding-right: 20px;
                color: #ffffff;
                font-size: 3cqi;
            }
            div[content-detail-header] {
                font-size: 7cqi;
            }
            div[content-detail-about] {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
            }
            div[content-detail-project] {
                width: 100%;
                height: 20vh;
            }
            div[project-item] {
                font-size: 5cqi;
                text-align: center;
                height: fit-content;
                margin-top: 10vh;
                transform: translateY(-50%);
            }
            div[content-skill] {
                width: 98%;
                height: 15vh;
                color: #ffffff;
                margin-left: 1%;
            }
            div[content-skill-image] {
                height: max-content;
                overflow-y: auto;
                -ms-overflow-style: none;
                scrollbar-width: none;
                height: 20vh;
            }
            div[content-skill] img {
                height: 9vh;
                margin-right: 5px;
                margin-top: 5px;
            }
            div[app-copyright] {
                position: fixed;
                bottom: 10px;
                right: 10px;
                color: #ffffff;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            div[content] {
                width: 100%;
                height: 80vh;
                left: 0;
                top: 0;
                display: grid;
                grid-template-rows: 70vh 10vh;
            }
            div[content-detail] {
                padding-left: 20px;
                padding-right: 20px;
                color: #ffffff;
                font-size: 3cqi;
            }
            div[content-detail-header] {
                font-size: 7cqi;
            }
            div[content-detail-about] {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
            }
            div[content-detail-project] {
                width: 100%;
                height: 20vh;
            }
            div[project-item] {
                font-size: 5cqi;
                text-align: center;
                height: fit-content;
                margin-top: 10vh;
                transform: translateY(-50%);
            }
            div[content-skill] {
                width: 98%;
                height: 15vh;
                color: #ffffff;
                margin-left: 1%;
            }
            div[content-skill-image] {
                height: max-content;
                overflow-y: auto;
                -ms-overflow-style: none;
                scrollbar-width: none;
                height: 15vh;
            }
            div[content-skill] img {
                height: 14vh;
                margin-right: 5px;
                margin-top: 5px;
            }
            div[app-copyright] {
                position: fixed;
                bottom: 10px;
                right: 10px;
                color: #ffffff;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            div[content] {
                width: 100%;
                height: 80vh;
                left: 0;
                top: 0;
                display: grid;
                grid-template-rows: 70vh 10vh;
            }
            div[content-detail] {
                padding-left: 20px;
                padding-right: 20px;
                color: #ffffff;
                font-size: 3cqi;
            }
            div[content-detail-header] {
                font-size: 7cqi;
            }
            div[content-detail-about] {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
            }
            div[content-detail-project] {
                width: 100%;
                height: 20vh;
            }
            div[project-item] {
                font-size: 5cqi;
                text-align: center;
                height: fit-content;
                margin-top: 10vh;
                transform: translateY(-50%);
            }
            div[content-skill] {
                width: 98%;
                height: 15vh;
                color: #ffffff;
                margin-left: 1%;
            }
            div[content-skill-image] {
                height: max-content;
                overflow-y: auto;
                -ms-overflow-style: none;
                scrollbar-width: none;
                height: 20vh;
            }
            div[content-skill] img {
                height: 9vh;
                margin-right: 5px;
                margin-top: 5px;
            }
            div[app-copyright] {
                position: fixed;
                bottom: 10px;
                right: 10px;
                color: #ffffff;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399px) {
            div[content] {
                position: absolute;
                width: 60%;
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
                width: 40%;
                height: 90vh;
                top: 10vh;
                left: 60%;
                background-image: url("public/image/page-01.png");
                background-position: right;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: top center;
                z-index: -1;
            }

            div[app-copyright] {
                position: absolute;
                bottom: 10px;
                right: 10px;
                color: #ffffff;
            }
        }

        @media (min-width: 1400px) {
            div[content] {
                position: absolute;
                width: 60%;
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
                width: 40%;
                height: 90vh;
                top: 10vh;
                left: 60%;
                background-image: url("public/image/page-01.png");
                background-position: right;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: top center;
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
                    <button class="btn btn-danger btn-lg" onclick="window.location.assign('/about');">Learn More About Me</button>
                    <button class="btn btn-outline-light btn-lg" onclick="window.location.assign('/resume');">Resume</button>
                </div>
                <div>
                    <button class="btn btn-outline-light btn-lg" onclick="window.location.assign('/contact');">Contact</button>
                </div>
            </div>
            <?php echo PageIndexView::LoadingProjectSlice(); ?>
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