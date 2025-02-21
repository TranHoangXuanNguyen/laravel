<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="././assets/css/students.css">
</head>
<body>
     <form method="post" action="">
            @csrf
            <div class="form">
                <h1>Sigup Information</h1>
                <div class="number">
                                <p>Name: </p>
                                <input type="text" name="name">
                    </div>
                    <div>
                                <p>Address:</p>
                                <input type="text" name="address">
                    </div>
                    <div>
                                <p>Phone Number:</p>
                                <input type="text" name="phone">
                    </div>
                    <div>
                                <p>Age:</p>
                                <input type="text" name="age">
                    </div>
                    <div>
                                <p>Web:</p>
                                <input type="text" name="web">
                    </div>
                    <div>
                                <p>Date of birth:</p>
                                <input type="text" name="date">
                    </div>
                    <button class="btn" type="submit">OK</button>


              <div>
                 @include ('blocks.error')S
              </div>

              <div class="display-infor">
                  @if(session()->has('students'))
                      <ul>
                          @foreach(session('students') as $item)
                              <li>{{ $item['name'] }}</li>
                          @endforeach
                      </ul>
                  @endif
              </div>


            </div>

        </form>

</body>
</html>
