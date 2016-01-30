@extends('blog.layouts.master', [
  'meta_description' => config('blog.description'),
])

@section('page-header')
  <header class="intro-header"
          style="background-image: url('{{ page_image($page_image) }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1>{{ $title }}</h1>
            <hr class="small">
            <h2 class="subheading">{{ $subtitle }}</h2>
            <span class="meta">
              <br><br>Posted on {{ date('F d, Y', strtotime($published_at)) }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>HolisticAgency je mlada one-man-show agencija koja želi da proširi saradnju sa stranim klijentima 
                i ubrza razvoj sopstvenih aplikacija.<br><br>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum 
                deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non 
                provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum 
                fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis 
                est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
                assumenda est, omnis dolor repellendus.<br><br>
                Temporibus autem quibusdam et aut officiis debitis aut rerum 
                necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum 
                rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut 
                perferendis doloribus asperiores repellat.</p>
        </div>
      </div>
    </div>
  </article>
@stop
