@component('layouts.app')
    <section class="home">
        <header class="home__header">
            <div class="home__header__inner">
                <div class="home__logo">
                    <a href="https://spatie.be" target="spatie">
                        @include('svg.logo')
                    </a>
                </div>
                
            </div>
        </header>
        <section class="home__introduction">
            <p>
                <h1 class="home__title">
                    Guidelines
                </h1>
            </p>

            <p class="-large">
                Este guideline possui um conjunto de padrões que usamos em nossos projetos. O objetivo é documentar nosso fluxo de trabalho, pois a consistência é uma das características mais valiosas de um software sustentável.
            </p>
            <p>
                O conteúdo dessa documentação existe para nós mesmos - mais importante ainda, para o nosso futuro - e para dar aos futuros colegas uma referência de como fazemos as coisas e suas peculiaridades. As diretrizes abrangem fluxo de trabalho, estilo de código e outras coisas que consideramos importantes. 
            </p>
            <p>
                Todas as páginas estão em nosso <a href="https://github.com/bubb/guidelines.bubb.com.br" target="bubb">GitHub</a>. Pull requests são bem-vindos, sempre.
            </p>
        </section>
        <nav class="home__index">
            <div class="home__index__inner">
                {{ app('navigation')->menu()->addClass('menu--home') }}
            </div>
            <footer class="home__index__footer">
                <a href="https://www.bubb.com.br">
                    © bubb web studio
                </a>
            </footer>
        </nav>
    </section>
@endcomponent
