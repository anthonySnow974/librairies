<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href={{ asset('css/app.css') }} rel="stylesheet">


    <title>Document</title>
</head>
<body>
    @include('layouts.header')
    


<a href="{{route('livre')}}">
    <button
    type="submit"
    class="inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg"
  >
   inscription
  </button>
</a>
<a href="{{route('auth')}}">
    <button
    type="submit"
    class="inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg"
  >
   connexion
  </button>
</a>
</div>
<div class="flex flex-row gap-4">
<a class="block" href="">
    <img
      class="object-cover w-full h-56 shadow-xl rounded-xl"
      src="https://www.hyperui.dev/photos/university-1.jpeg"
      alt=""
    />
  
    <div class="p-4">
      <h5 class="text-xl font-bold text-gray-900">
        Finding the Journey to Mordor
      </h5>
      <p class="mt-2 text-gray-500">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero
        labore natus atque, ducimus sed.
      </p>
    </div>
    <a class="block" href="">
        <img
          class="object-cover w-full h-56 shadow-xl rounded-xl"
          src="https://www.hyperui.dev/photos/university-1.jpeg"
          alt=""
        />
      
        <div class="p-4">
          <h5 class="text-xl font-bold text-gray-900">
            Finding the Journey to Mordor
          </h5>
          <p class="mt-2 text-gray-500">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero
            labore natus atque, ducimus sed.
          </p>
        </div>
        <a class="block" href="">
            <img
              class="object-cover w-full h-56 shadow-xl rounded-xl"
              src="https://www.hyperui.dev/photos/university-1.jpeg"
              alt=""
            />
          
            <div class="p-4">
              <h5 class="text-xl font-bold text-gray-900">
                Finding the Journey to Mordor
              </h5>
              <p class="mt-2 text-gray-500">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero
                labore natus atque, ducimus sed.
              </p>
            </div>
            <a class="block" href="">
                <img
                  class="object-cover w-full h-56 shadow-xl rounded-xl"
                  src="https://www.hyperui.dev/photos/university-1.jpeg"
                  alt=""
                />
              
                <div class="p-4">
                  <h5 class="text-xl font-bold text-gray-900">
                    Finding the Journey to Mordor
                  </h5>
                  <p class="mt-2 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero
                    labore natus atque, ducimus sed.
                  </p>
                </div>
</div>
  </a>
</body>
</html>