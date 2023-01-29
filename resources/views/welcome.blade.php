@extends('layouts.indexLayout');
    @section('content')
        
        <div class="slider">
            <div class="position-relative overflow-hidden p-3 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                  <h1 class="display-4 fw-normal">IAsBlog</h1>
                  <p class="lead fw-normal">Se documenter sur des sujets intéressants  et d'actualité.</p>
                  <a class="btn start-btn" href="#mainContent">Commencer</a>
                </div>
            </div>
        </div>
            
        <div class="headlines">
          <div class="headline">
              <div class="my-3 p-3">
                <h2 class="display-5">Intelligences artificielles</h2>
                <p class="lead">Le pouvoir du lendemain.</p>
              </div>
              <div class="">
                  Profiter dès à présent des algorithmes intelligents.
                  De l'IA pour créer toutes sortes de contenus sur le web.
              </div>
            </div>
            <div class="headline">
                <div class="my-3 p-3">
                  <h2 class="display-5">ChatGPT</h2>
                  <p class="lead">Une IA super puissante.</p>
                </div>
                <div class="">
                    ChatGPT crée des contenus très intéressants.
                    Il a un système créatif très proche de l'intelligence naturelle.
                </div>
              </div>
              <div class="headline">
                <div class="my-3 p-3">
                  <h2 class="display-5">Des professionels</h2>
                  <p class="lead">De la créativité et le partage du savoir.</p>
                </div>
                <div class="">
                    La veille informatique classique.
                    De bons contenus(produits par des professionels humains) pour s'informer et se former continuellement.
                </div>
              </div>              
          </div>
          <div class="mainContent" id="mainContent">
            <div class="mainContent-headline headline-blog text-center overflow-hidden">
                <div class="headline-title">
                  <a href=""><h2 class="display-5">Blog</h2></a>
                  <p class="lead">Contenus de tout genre.</p>
                </div>
                <div class="b">
                    Contenus web allant depuis l'informatique et les autres sciences jusqu'à la littérature.
                </div>
              </div>
            <div class="mainContent-headline text-center overflow-hidden">
                <div class="headline-title">
                  <a href=""><h2 class="display-5">Posts</h2></a>
                  <p class="lead">Les articles couvrant plusieurs catégories.</p>
                </div>
                <div class="b">
                    Les articles couvrant plusieurs catégories et écrits par plusieurs professionels et des IAs.
                    Les articles sur les sujets intéressants permettant de faire la veille et de s'améliorer continuellement.
                    <a href="posts.html"><button class="btn btn-headline">Voir</button></a>
                </div>
            </div>
            <div class="mainContent-headline text-center overflow-hidden">
                <div class="headline-title">
                  <a href=""><h2 class="display-5">Citations et conseils</h2></a>
                  <p class="lead">Phrases de motivation.</p>
                </div>
                <div class="b">
                    Des mots pour vous motiver et vous booster quotidiennement.
                    <a href="citations.html"><button class="btn btn-headline">Voir</button></a>
                </div>
            </div>
            <div class="mainContent-headline text-center overflow-hidden">
                <div class="headline-title">
                  <a href=""><h2 class="display-5">Histoires drôles</h2></a>
                  <p class="lead">Contenus de divertissement.</p>
                </div>
                <div class="b">
                    Des histoires drôles pour vous divertir.
                    Des contes et histoires de divers cieux.
                    <a href="histories.html"><button class="btn btn-headline">Voir</button></a>
                </div>
            </div>
            <div class="mainContent-headline text-center overflow-hidden">
                <div class="headline-title">
                  <a href=""><h2 class="display-5">Mode développeur</h2></a>
                  <p class="lead">Créateurs de contenu.</p>
                </div>
                <div class="b">
                    Les articles couvrant plusieurs catégories et écrits par plusieurs professionels et des IAs.
                    Les articles sur les sujets intéressants permettent de faire la veille et de s'améliorer.
                    <a href="developper.html"><button class="btn btn-headline">Voir</button></a>
                </div>
              </div>
          </div>
      </main>

      <div class="modals hide">
        <div class="modal hide modal-tour position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalTour">
          <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
              <div class="modal-body p-5">
                <h2 class="fw-bold mb-0">Accord de confidentialité</h2>
        
                <ul class="d-grid gap-4 my-5 list-unstyled">
                  <li class="d-flex gap-4">
                    <svg class="bi text-muted flex-shrink-0" width="48" height="48"><use xlink:href="#grid-fill"/></svg>
                    <div>
                      <h5 class="mb-0">Grid view</h5>
                      Not into lists? Try the new grid view.
                    </div>
                  </li>
                  <li class="d-flex gap-4">
                    <svg class="bi text-warning flex-shrink-0" width="48" height="48"><use xlink:href="#bookmark-star"/></svg>
                    <div>
                      <h5 class="mb-0">Bookmarks</h5>
                      Save items you love for easy access later.
                    </div>
                  </li>
                  <li class="d-flex gap-4">
                    <svg class="bi text-primary flex-shrink-0" width="48" height="48"><use xlink:href="#film"/></svg>
                    <div>
                      <h5 class="mb-0">Video embeds</h5>
                      Share videos wherever you go.
                    </div>
                  </li>
                </ul>
                <button type="button" class="btn btn-lg btn-primary mt-5 w-100" data-bs-dismiss="modal">Accepter</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal hide modal-tour position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalTour">
          <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
              <div class="modal-body p-5">
                <h2 class="fw-bold mb-0">Termes</h2>
        
                <ul class="d-grid gap-4 my-5 list-unstyled">
                  <li class="d-flex gap-4">
                    <svg class="bi text-primary flex-shrink-0" width="48" height="48"><use xlink:href="#film"/></svg>
                    <div>
                      <h5 class="mb-0">Video embeds</h5>
                      Share videos wherever you go.
                    </div>
                  </li>
                </ul>
                <button type="button" class="btn btn-lg btn-primary mt-5 w-100" data-bs-dismiss="modal">Compris, Merci!</button>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection