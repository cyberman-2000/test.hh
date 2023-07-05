<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <div class="container">
        <div class="row dor-sec">
            <h1>Конфигуратор входной двери</h1>
           <div class="col-6 d-flex">
               <div class="door1 colour_bor mx-2">
                   <div class="handle"></div>
               </div>
               <div class="door2 colour_bor">
                   <div class="handle"></div>
               </div>
           </div>
            <div class="col-6">
                <div class="form">
                    <h3>Параметры</h3>
                    <form action="">
                        <div class="col-bor d-flex justify-content-between">
                            <label for="">Цвет покраски:</label>
                            <select type="select" id="border" class="input-def">
                                <option value="0">Выбрать</option>
                                @foreach($border as $value)
                                    <option rgb="{{$value->rgb}}" value="{{$value->price}}">{{$value->color}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-door d-flex justify-content-between">
                            <label for="">Цвет плёнки:</label>
                            <select type="select" id="door" class="input-def door_sec">
                                <option value="0">Выбрать</option>
                                @foreach($door as $value)
                                    <option rgb="{{$value->rgb}}" value="{{$value->price}}">{{$value->color}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-handle d-flex justify-content-between">
                            <label for="">Цвет ручки:</label>
                            <select type="select" id="handle" class="input-def">
                                <option value="0">Выбрать</option>
                                @foreach($handle as $value)
                                    <option rgb="{{$value->rgb}}" value="{{$value->price}}">{{$value->color}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-handle d-flex justify-content-between">
                            <label for="">Ширина:</label>
                            <select type="select" id="width" class="input-def">
                                <option value="0">Выбрать</option>
                                @foreach($width as $value)
                                    <option value="{{$value->price}}">{{$value->size}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-handle d-flex justify-content-between">
                            <label for="">Высота:</label>
                            <select type="select" id="height" class="input-def">
                                <option value="0">Выбрать</option>
                                @foreach($height as $value)
                                    <option value="{{$value->price}}">{{$value->size}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-handle d-flex justify-content-between">
                            <label for="">Открывание:</label>
                            <select type="select" id="open_side" class="input-def ">
                                <option value="0">Выбрать</option>
                                <option value="1">Правое</option>
                                <option value="2">Левое</option>
                            </select>
                        </div>
                        <div class="col-handle d-flex justify-content-between">
                            <label for="">Аксесуары:</label>
                            <p id="acses">Выбрать</p>
                            <ul id="acsesuars">
                                @foreach($acsessuares as $value)
                                    <li><input type='checkbox' id='checkboxOne' value='{{$value->price}}'><label for='checkboxOne'>{{$value->name}}</label></li>
                                @endforeach
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-x-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm-1.489 7.14a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" fill="currentColor" stroke-width="0" />
                                </svg>
                            </ul>
                        </div>
                            <h3>Итого:</h3>
                    <button type="submit" class="btn btn-outline-danger">Отправит комплектацию</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>
