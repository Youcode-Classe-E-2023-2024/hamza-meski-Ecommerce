<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
<!-- component -->
<style>
    html {
        scroll-behavior: smooth;
    }
    /* Compiled dark classes from Tailwind */
    .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
        border-color: rgba(55, 65, 81);
    }
    .dark .dark\:bg-gray-50 {
        background-color: rgba(249, 250, 251);
    }
    .dark .dark\:bg-gray-100 {
        background-color: rgba(243, 244, 246);
    }
    .dark .dark\:bg-gray-600 {
        background-color: rgba(75, 85, 99);
    }
    .dark .dark\:bg-gray-700 {
        background-color: rgba(55, 65, 81);
    }
    .dark .dark\:bg-gray-800 {
        background-color: rgba(31, 41, 55);
    }
    .dark .dark\:bg-gray-900 {
        background-color: rgba(17, 24, 39);
    }
    .dark .dark\:bg-red-700 {
        background-color: rgba(185, 28, 28);
    }
    .dark .dark\:bg-green-700 {
        background-color: rgba(4, 120, 87);
    }
    .dark .dark\:hover\:bg-gray-200:hover {
        background-color: rgba(229, 231, 235);
    }
    .dark .dark\:hover\:bg-gray-600:hover {
        background-color: rgba(75, 85, 99);
    }
    .dark .dark\:hover\:bg-gray-700:hover {
        background-color: rgba(55, 65, 81);
    }
    .dark .dark\:hover\:bg-gray-900:hover {
        background-color: rgba(17, 24, 39);
    }
    .dark .dark\:border-gray-100 {
        border-color: rgba(243, 244, 246);
    }
    .dark .dark\:border-gray-400 {
        border-color: rgba(156, 163, 175);
    }
    .dark .dark\:border-gray-500 {
        border-color: rgba(107, 114, 128);
    }
    .dark .dark\:border-gray-600 {
        border-color: rgba(75, 85, 99);
    }
    .dark .dark\:border-gray-700 {
        border-color: rgba(55, 65, 81);
    }
    .dark .dark\:border-gray-900 {
        border-color: rgba(17, 24, 39);
    }
    .dark .dark\:hover\:border-gray-800:hover {
        border-color: rgba(31, 41, 55);
    }
    .dark .dark\:text-white {
        color: rgba(255, 255, 255);
    }
    .dark .dark\:text-gray-50 {
        color: rgba(249, 250, 251);
    }
    .dark .dark\:text-gray-100 {
        color: rgba(243, 244, 246);
    }
    .dark .dark\:text-gray-200 {
        color: rgba(229, 231, 235);
    }
    .dark .dark\:text-gray-400 {
        color: rgba(156, 163, 175);
    }
    .dark .dark\:text-gray-500 {
        color: rgba(107, 114, 128);
    }
    .dark .dark\:text-gray-700 {
        color: rgba(55, 65, 81);
    }
    .dark .dark\:text-gray-800 {
        color: rgba(31, 41, 55);
    }
    .dark .dark\:text-red-100 {
        color: rgba(254, 226, 226);
    }
    .dark .dark\:text-green-100 {
        color: rgba(209, 250, 229);
    }
    .dark .dark\:text-blue-400 {
        color: rgba(96, 165, 250);
    }
    .dark .group:hover .dark\:group-hover\:text-gray-500 {
        color: rgba(107, 114, 128);
    }
    .dark .group:focus .dark\:group-focus\:text-gray-700 {
        color: rgba(55, 65, 81);
    }
    .dark .dark\:hover\:text-gray-100:hover {
        color: rgba(243, 244, 246);
    }
    .dark .dark\:hover\:text-blue-500:hover {
        color: rgba(59, 130, 246);
    }

    /* Custom style */
    .header-right {
        width: calc(100% - 3.5rem);
    }
    .sidebar:hover {
        width: 16rem;
    }
    @media only screen and (min-width: 768px) {
        .header-right {
            width: calc(100% - 16rem);
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
