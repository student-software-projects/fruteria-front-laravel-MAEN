@extends('layout.app')
@section('content')
     <div class="blog-card">
        <div class="meta">
            <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
            <ul class="details">
                <li class="author"><a href="#">John Doe</a></li>
                <li class="date">Aug. 24, 2015</li>
                <li class="tags">
                    <ul>
                        <li><a href="#">Learn</a></li>
                        <li><a href="#">Code</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="description">
            <h1>Learning to Code</h1>
            <h2>Opening a door to the future</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <p class="read-more">
                <a href="#">Read More</a>
            </p>
        </div>
    </div>
    <div class="blog-card alt">
        <div class="meta">
            <div class="photo" style="background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.abc.com.py%2Fedicion-impresa%2Fsuplementos%2Fgastronomia%2Fclasificacion-de-las-frutas-1254179.html&psig=AOvVaw1iiB0kMtfqVxGBz8WkhHli&ust=1604025269787000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMDxkvfh2OwCFQAAAAAdAAAAABAL)"></div>
            <ul class="details">
                <li class="author"><a href="#">Jane Doe</a></li>
                <li class="date">July. 15, 2015</li>
                <li class="tags">
                    <ul>
                        <li><a href="#">Learn</a></li>
                        <li><a href="#">Code</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="description">
            <h1>Mastering the Language</h1>
            <h2>Java is not the same as JavaScript</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <p class="read-more">
                <a href="#">Read More</a>
            </p>
        </div>
    </div>
@endsection
