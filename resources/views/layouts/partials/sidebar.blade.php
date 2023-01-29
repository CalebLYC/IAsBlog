<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar">
            <a href="/developper" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4 sidebar-title">Mode développeur</span>
              </a>
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li>
                  <a href="/dashboard" class="nav-link">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                    Tableau de bord
                  </a>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                      Publier du contenu
                    </button>
                  <div class="collapse" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                      <li><a href="/posts/create" class="d-inline-flex text-decoration-none rounded">Poster un article</a></li>
                      <li><a href="/citations/create" class="d-inline-flex  text-decoration-none rounded">Poster une citation ou conseil</a></li>
                      <li><a href="/histories/create" class="d-inline-flex  text-decoration-none rounded">Poster une histoire drôle</a></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="/myContents" class="nav-link">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                    Mes contenus
                  </a>
                </li>
                <li>
                  <a href="/logout" class="nav-link">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                    Quitter le mode développeur
                  </a>
                </li>
              </ul>
        </div>  
    </div>