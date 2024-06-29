<style>
    .navbar-nav .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }

    .nav-link {
        transition: all 0.2s ease-in-out;
    }

    .nav-link:hover {
        color: black;
    }

    .dropdown-menu {
        margin-top: 0;
        background-color: #fff;
        border-radius: 5px;
    }

    .dropdown-item {
        transition: all 0.2s ease-in-out;
        font-weight: 100;
    }

    .dropdown-item:hover {
        color: black;
        font-weight: 400;
        padding-left: 20px;
        background-color: #f8f9fa;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
    }

    ::-webkit-scrollbar {
        width: 5px;
        background-color: #fff;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #000;
        border-radius: 5px;
    }

    .border-outer {
        display: inline-block;
        padding: 2px;
        border: 2px solid #6c757a;
        border-radius: 10px;
    }

    .navbar-brand img {
        width: 30px;
        height: 30px;
        margin-right: 8px;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.25);
        box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        border-color: black;
    }

    .btn-search {
        background-color: #343a40;
        color: white;
    }

    .video-section {
        position: relative;

        height: 300px;
        overflow: hidden;
    }

    .video-section video {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
    }

    .footer {
        /* position: fixed; */
        bottom: 0;
        width: 100%;
        background-color: #fff;
        z-index: 2;
    }

    #typing {
        display: inline;
        border-right: 2px solid black;
        white-space: nowrap;
        overflow: hidden;
        animation: caret 0.5s step-end infinite;
    }

    @keyframes caret {

        from,
        to {
            border-color: transparent;
        }

        50% {
            border-color: black;
        }
    }

    .loader {
        top: 0;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        position: fixed;
        overflow: hidden;
        text-align: center;
        background-color: #333333;
    }

    .gradient {
        background-image: linear-gradient(to right, rgba(0, 0, 0, 1) 0%, rgba(111, 111, 111, 1) 100%);
    }

    .gradient-border {
        border: 4px solid;
        border-image-slice: 1;
        border-width: 4px;
        border-image-source: linear-gradient(to right,
                rgba(85, 88, 218, 1) 0%,
                rgba(95, 209, 249, 1) 100%);
        border-radius: 0.25rem;
    }

    .card-img-overlay {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .download-button {
        background-color: rgba(255, 255, 255, 0.7);
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
        color: #5558da;
        cursor: pointer;
    }

    .card {
        width: 100%;
        max-width: 350px;
        height: auto;
        position: relative;
        margin: 5px;
        padding: 5px;
        border: 5px ridge;
        border-image-slice: 1;
        border-image-source: linear-gradient(to right, rgba(85, 88, 218, 1) 0%, rgba(95, 209, 249, 1) 100%);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }

    .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .link-button {
        margin-top: auto;
        padding: 10px 20px;
        background-color: rgba(85, 88, 218, 1);
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 15px;
        text-align: center;
    }

    #outline {
        stroke-dasharray: 2.42777px, 242.77666px;
        stroke-dashoffset: 0;
        -webkit-animation: anim 1.6s linear infinite;
        animation: anim 1.6s linear infinite;
    }

    @-webkit-keyframes anim {
        12.5% {
            stroke-dasharray: 33.98873px, 242.77666px;
            stroke-dashoffset: -26.70543px;
        }

        43.75% {
            stroke-dasharray: 84.97183px, 242.77666px;
            stroke-dashoffset: -84.97183px;
        }

        100% {
            stroke-dasharray: 2.42777px, 242.77666px;
            stroke-dashoffset: -240.34889px;
        }
    }

    @keyframes anim {
        12.5% {
            stroke-dasharray: 33.98873px, 242.77666px;
            stroke-dashoffset: -26.70543px;
        }

        43.75% {
            stroke-dasharray: 84.97183px, 242.77666px;
            stroke-dashoffset: -84.97183px;
        }

        100% {
            stroke-dasharray: 2.42777px, 242.77666px;
            stroke-dashoffset: -240.34889px;
        }
    }

    :root {
        --bg: #fdfdfd;
        --highlight1: rgba(85, 88, 218, 1);
        --highlight2: rgba(95, 209, 249, 1);
        --color: #1a1e24;
        --font-number: Montserrat, Roboto, Helvetica, Arial, sans-serif;
        --font-head: "Space Mono", Consolas, Menlo, Monaco, "Courier New", monospace;
        --font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }

    .list {
        list-style: none;
        width: 100%;
        max-width: 90%;
    }

    .item {
        display: block;
        clear: both;
        counter-increment: list;
        padding-bottom: 2rem;
        font-size: 1.1rem;
        line-height: 1.325;
        position: relative;
    }

    .item:before {
        font: bold 2.25rem/1 var(--font-number);
        content: counter(list);
        width: 3rem;
        height: 3rem;
        float: left;
        margin: 0 1.5rem 0.75rem 0;
        color: var(--bg);
        background: var(--highlight1) linear-gradient(to bottom right, var(--highlight1) 25%, var(--highlight2));
        text-shadow: 0 0 2px var(--highlight1);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        shape-outside: ellipse();
        z-index: 1;
    }

    .headline {
        padding: 0rem 0 0 0;
        margin: 0 0 1rem 0;
        font: normal 2rem var(--font-head);
    }

    .custom-list {
        list-style-type: none;
        padding: 0;
    }

    .custom-item {
        position: relative;
        padding-left: 20px;
        margin-bottom: 10px;
        margin-left: 20px;
        font-size: 16px;
    }

    .custom-item::before {
        content: '';
        width: 10px;
        height: 10px;
        background-color: #2C71F2;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: 7px;
    }

    .bold-point {
        font-weight: bold;
        color: #2C71F2;
    }
</style>