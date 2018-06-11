<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <form action="/task/{{ !empty($task) ? $task->id : 'create' }}" method="post">
                
                {{ csrf_field() }}
                
                @if(!empty($task))
                    
                    {{ method_field('patch') }}
                    
                @endif
                
                @if(!empty($errors) && count($errors))
                    
                    <ol style="color:red;">
                        <li><?= implode('<li><li>', $errors->all()) ?></li>
                    </ol>
                    
                @endif
                
                <p>
                    <label>Title</label>
                    <input type="text" name="title" value="{{ !empty(old('title')) ? old('title') : (!empty($task) ? $task->title : '') }}">
                </p>          
                <p>
                    <label>User</label>
                    <select name="user_id">
                        @foreach ($users as $user)
                        
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            
                        @endforeach
                    </select>
                </p>
                <p>
                    <input type="submit" name="submit" value="Save">
                </p>
            </form>
        </div>
    </body>
</html>
