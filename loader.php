<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMA Loader</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
<style>
        /* Fullscreen Preloader Overlay */
        #preloader {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100vh;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
            transition: opacity 0.5s ease;
        }

        #preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        /* Loader Base */
        .atma-loader {
            position: relative;
            display: inline-block;
        }

        /* Loader Text */
        .atma-loader span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 60px;
            letter-spacing: 5px;
            font-family: sans-serif;
        }

        .atma-loader span:nth-child(1) {
            color: transparent;
            -webkit-text-stroke: 0.3px rgb(250, 250, 250);
        }

        .atma-loader span:nth-child(2) {
            color: rgb(128, 198, 255);
            -webkit-text-stroke: 2px rgb(140, 237, 76);
            animation: atma-wave 3s ease-in-out infinite;
        }

        /* Wave Animation */
        @keyframes atma-wave {
            0%, 100% {
                clip-path: polygon(0% 45%, 15% 44%, 32% 50%,
                        54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
            }

            50% {
                clip-path: polygon(0% 60%, 16% 65%, 34% 66%,
                        51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
            }
        }
    </style>
</head>

<body>
   
 <!-- Fullscreen Preloader -->
    <div id="preloader">
        <div class="atma-loader w-100">
            <span class="w-100 text-center">कृषि तंत्रज्ञान व्यवस्थापन यंत्रणा ( आत्मा ) चंद्रपूर</span>
            <span class="w-100 text-center">कृषि तंत्रज्ञान व्यवस्थापन यंत्रणा ( आत्मा ) चंद्रपूर</span>
       <!-- <div class="d-block text-center h4 text-white fw-bold">
            aple saharsh swagat karit ahe 
        </div> -->
        </div>
       
    </div>

   

    <script>
        // Preloader Logic
       window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.classList.add('hidden'); // Start fade out
            }, 1000); // Delay before hiding
            setTimeout(() => {
                preloader.remove(); // Remove from DOM
            }, 1600); // Remove after fade-out
       });
    </script>
</body>
</html>
