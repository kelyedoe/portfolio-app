<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Edoe Junior portfolio</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-white px-10 dark:bg-gray-800">
    <section class="min-h-screen ">
        <nav class="py-10 mb-12 flex justify-between">
            <h1 class="text-2xl font-bold font-poppins">Loopfio</h1>
            <ul class="flex items-center">
                <li><i class="sun fa fa-adjust cursor-pointer text-2xl" aria-hidden="true"></i></li>
                {{-- <li><i class="moon fa fa-adjust cursor-pointer text-2xl" aria-hidden="true"></i></li> --}}
                <li><a class="bg-gradient-to-r from-indigo-500 to-indigo-700 text-2xl text-white px-4 py-2 rounded-md ml-8 font-poppins" href="#">Resume</a></li>
            </ul>
        </nav>

        <div class="text-center p-10">
            <h2 class="text-3xl py-2 text-indigo-600 font-medium font-poppins">Edoe Junior</h2>
            <h3 class="text-2xl py-2 font-poppins">Backend developer</h3>
            <p class="text-md py-1 leading-6 text-gray-800 font-poppins">
                Hey! Je  me momme junior edoe agbodjan. Je suis developpeur web backend.
                Je suis titulaire d'un bachelor en genie logiciel (Inde 2018-2021). Actuellement je suis
                suis en L3 MIAGE (France).

            </p>
        </div>
        <div class="text-4xl flex justify-center gap-10 text-indigo-800">
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-github"></i>
            <i class="fa fa-trophy" aria-hidden="true"></i>
        </div>

        <section class="py-5">
            <div class="shadow-xl ">
                <h2 class="font-poppins text-2xl text-center py-5">Centre d'interet</h2>
                <div class="grid grid-cols-2 gap-4 font-poppins p-3 md:grid-cols-4 text-center">
                    <div class="rounded box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white  font-poppins">
                        Big Data
                    </div>
                    <div class="rounded p-3 box-decoration-clone hover:box-decoration-slice bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Machine Learning</div>
                    <div class="rounded p-3 box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Modelisation UML</div>
                    <div class="rounded p-3   box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700  text-center text-white text-sm font-poppins">Backend Dev</div>   
                </div> 
            </div>
        </section>

        <section class="py-5">
            <div class="shadow-xl">
                <h2 class="font-poppins text-2xl text-center py-5">Developpeur</h2>
                <div class="grid grid-cols-2 gap-4 font-poppins p-3 md:grid-cols-4 text-center">
                    <div class="rounded box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white  font-poppins">
                        LARAVEL
                    </div>
                    <div class="rounded p-3 box-decoration-clone hover:box-decoration-slice bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Tensorflow</div>
                    <div class="rounded p-3 box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Node js</div>  
                </div> 
            </div>
        </section>

        <section class="py-5">
            <div class="shadow-xl">
                <h2 class="font-poppins text-2xl text-center py-5">Langage de Programmation</h2>
                <div class="grid grid-cols-2 gap-4 font-poppins p-3 md:grid-cols-4 text-center">
                    <div class="rounded box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white  font-poppins">
                        PHP(oop)
                    </div>
                    <div class="rounded p-3 box-decoration-clone hover:box-decoration-slice bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">JavaScript</div>
                    <div class="rounded p-3 box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Java</div>
                    <div class="rounded p-3 box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Python</div>  
                </div> 
            </div>
        </section>

        <section class="py-5">
            <div class="shadow-xl">
                <h2 class="font-poppins text-2xl text-center py-5">FrontEnd & Design</h2>
                <div class="grid grid-cols-2 gap-4 font-poppins p-3 md:grid-cols-4 text-center">
                    <div class="rounded box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white  font-poppins">
                        HTML/CSS
                    </div>
                    <div class="rounded p-3 box-decoration-clone hover:box-decoration-slice bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Tailwind CSS</div>
                    <div class="rounded p-3 box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Figma</div>
                    <div class="rounded p-3 box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Photoshop</div>  
                </div> 
            </div>
        </section>

        <section class="py-5">
            <div class="shadow-xl">
                <h2 class="font-poppins text-2xl text-center py-5">Base de donnees</h2>
                <div class="grid grid-cols-2 gap-4 font-poppins p-3 md:grid-cols-4 text-center">
                    <div class="rounded box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white  font-poppins">
                        Mysql
                    </div>
                    <div class="rounded p-3 box-decoration-clone hover:box-decoration-slice bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Mongo DB</div>
                </div> 
            </div>
        </section>
        
        <section class="py-5">
            <div class="shadow-xl">
                <h2 class="font-poppins text-2xl text-center py-5">DevOps & MlOps</h2>
                <div class="grid grid-cols-2 gap-4 font-poppins p-3 md:grid-cols-4 text-center">
                    <div class="rounded box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white  font-poppins">
                        <h3>GitHub</h3>
                        <p>version control</p>
                    </div>
                </div> 
            </div>
        </section>

        <section class="py-5">
            <div class="shadow-xl">
                <h2 class="font-poppins text-2xl text-center py-5">Outils</h2>
                <div class="grid grid-cols-2 gap-4 font-poppins p-3 md:grid-cols-4 text-center">
                    <div class="rounded box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white  font-poppins">
                        <h3>Git</h3>
                        <p>version control</p>
                    </div>
                    <div class="rounded p-3 box-decoration-clone hover:box-decoration-slice bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Slack</div>
                    <div class="rounded p-3 box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Trello</div>
                    <div class="rounded p-3 box-decoration-clone bg-gradient-to-r from-indigo-500 to-indigo-700 text-center text-white text-sm font-poppins">Discord</div>  
                </div> 
            </div>
        </section> 
    </section>

   
<footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
    <span class="text-sm  text-gray-500 sm:text-center dark:text-gray-400 font-poppins">© 2022 <a href="#" class="hover:underline">Loopfio</a>. All Rights Reserved.
    </span>
</footer>

<script src="./app.js"></script>
</body>
</html>