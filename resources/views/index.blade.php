<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    box-sizing: border-box;
}

body{
    padding: 0;
    margin: 0;
}

a{
    text-decoration: none;
}

.mt-5{
    margin-top: 5rem;
}

.our-blog{
    background-color: #f8f9fa;
    padding: 100px 0;
}

.container{
    max-width: 960px;
    margin: 0 auto;
}

.row{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.text-center{
    text-align: center;
    font-size: 18px;
}

.card-text h2{
    font-weight: 500;
    font-size: 1.6em;
}
.text-center h2{
    font-weight: 500;
    font-size: 1.6em;
}

.text-center h2 span{
    font-weight: 800;
}

.text-center p{
    max-width: 500px;
    margin: 0 auto;
    color: #6c757d;
    line-height: 1.5;
    font-size: 1em;
}

.col{
    width: 33.3333333%;
    overflow: hidden;
    padding: 15px;
}

.col .card{
    width: 100%;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.col img{
    width: 100%;
    height: auto;
    border: 0;
}

.col .card-body{
    padding: 0 15px 15px 15px;
    background-color: #fff;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}

.card-body h5{
    font-size: 24px;
    margin: 7px 0;
}

.card:hover{
    transform: translateY(-10px);
    transition: transform 0.3s ease;
}

.card p{
    color: #6c757d;
}

.card-body .date-author span{
    color: #e74c3c;
}

.card-body h5 a{
    color: #222;
}

@media(min-width: 577px) and (max-width: 768px){
    .col{
        width: 50%;
    }
}

@media(max-width: 576px){
    .col{
        width: 100%;
    }
}

* {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
}

.nav {
  height: 50px;
  width: 100%;
  background-color: #4d4d4d;
  position: relative;
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  float: right;
  font-size: 18px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: #efefef;
}

.nav > .nav-links > a:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}
    </style>


</head>
<body>
    <!--navbar -->
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
              خوش آمدید
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>

        <div class="nav-links">

          <a href="" >همکاری با ما</a>
          <a href="" ">درباره ما</a>
          <a href="{{route('register')}}"  >عضویت</a>
          <a href="{{route('login')}}">ورود</a>
        </div>
      </div>

    <section class="our-blog">
        <div class="container">
            <div class="text-center">
                <h2>hotProgramming</h2>
                <p> برنامه نویسی</p>
            </div>
            <div class="row mt-5">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <center><a href="{{route('article.ListArticles')}}"> مقالات</a></center>
                                </h5>
                                <p class="date-author">
                                    11 March 2020 <span class="author">Mahdi Hajighasemi</span>
                                </p>
                                <center></center> <p class="card-text">
                                آخرین مقالات در مورد انواع  زبان های برنامه نویسی و بسیاری از مطالب به درد بخور و کاربردی در مورد دنیای برنامه نویسی و اطلاعات رو میتونی همین حالا مطالعه کنی
                                </p></center>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                  <center> <a href="">کلیپ های آموزشی</a></center>
                                </h5>
                                <p class="date-author">
                                    11 March 2020 <span class="author">Mahdi Hajighasemi</span>
                                </p>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam vero eaque animi pariatur fugit excepturi, fuga delectus facere provident beatae.
                                </p>
                            </div>
                        </div>
                    </div>


</body>
</html>
