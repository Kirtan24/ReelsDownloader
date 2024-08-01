# Instagram Reels, Videos, and Photos Downloader

# Demo Video
<img src="https://github.com/Kirtan24/ReelsDownloader/blob/main/public/videos/CodX-VideoDownloader.gif" alt="Demo Video">

# About Project
This Laravel project allows users to download Instagram Reels, videos, and photos by simply pasting the corresponding link. If multiple photos are available in the link, they can be downloaded separately. The application is created using Laravel, HTML, CSS, AJAX, jQuery, and VANTA for a dynamic background. The design is very user-friendly, featuring a link box with an inbuilt "paste link" option that allows users to paste the link automatically by clicking the button.

## Features

- Download Instagram Reels by pasting the link.
- Download Instagram videos and photos with ease.
- Separate download option for multiple photos available in a single link.
- Dynamic background using VANTA.
- User-friendly design with an inbuilt "paste link" option.

## Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/instagram-downloader.git
    cd instagram-downloader
    ```

2. **Install Composer dependencies**:
    ```bash
    composer install
    ```

3. **Install NPM dependencies**:
    ```bash
    npm install
    ```

4. **Set up your environment file**:
    - Copy the `.env.example` file to `.env`:
    ```bash
    cp .env.example .env
    ```
    - Generate an application key:
    ```bash
    php artisan key:generate
    ```

## Usage

1. Run the application using the following command:
    ```bash
    php artisan serve
    ```
2. Open your browser and navigate to the provided URL.
3. Paste the Instagram link in the input box or use the "paste link" button.
4. Click the download button to download the content.
