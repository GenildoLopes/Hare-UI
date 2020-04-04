
<?php
    include_once 'includes/header.php';
?>

<body class="silver">

<!-- Navbar -->
<nav class="navbox honey-dew">
    <!-- Brand - Logo -->
    <a href="#" class="nav-brand">
        <div class="box-logo">
            <span>H</span>
        </div>
    </a>

    <!-- Links -->
    <div class="nav-list">
        <ul>
            <li>
                <a href="downloads.php" class="tc-dark">Download</a>
            </li>
            <li class="lg-only">
                <a href="https://github.com/GenildoLopes/Hare-UI">
                    <img src="imgs/github-dark.svg" alt="Github Ícone">
                </a>
            </li>
        </ul>
    </div>

    <!-- Btn Open Menu Mob -->
    <img src="imgs/menu-dark.svg" class="open-menu" alt="Botão Abrir Menu">
</nav>

<!-- Btn Aside -->
<img src="imgs/menu-10.png" id="btn-aside" alt="Botão Abrir Sidebar">

<!-- Aside List -->
<aside class="sidebar fixed" id="sidebar">
    <ul>
        <li>
            <a href="#heights">Alturas</a>
        </li>
        <li>
            <a href="#backgrounds">Backgrounds</a>
        </li>
        <li>
            <a href="#borders">Bordas</a>
        </li>
        <li>
            <a href="#border-radius">Border-Radius</a>
        </li>
        <li>
            <a href="#buttons">Botões</a>
        </li>
        <li>
            <a href="#cards">Cards</a>
        </li>
        <li>
            <a href="#columns">Colunas</a>
        </li>
        <li>
            <a href="#text-colors">Cores de Texto</a>
        </li>
        <li>
            <a href="#display">Display</a>
        </li>
        <li>
            <a href="#flexbox">Flexbox</a>
        </li>
        <li>
            <a href="#fonts">Fontes</a>
        </li>
        <li>
            <a href="#forms">Formulários</a>
        </li>
        <li>
            <a href="#images">Imagens</a>
        </li>
        <li>
            <a href="#links">Links</a>
        </li>
        <li>
            <a href="#margins">Margens / Paddings</a>
        </li>
        <li>
            <a href="#navbar">Navbar</a>
        </li>
        <li>
            <a href="#overflow">Overflow</a>
        </li>
        <li>
            <a href="#positions">Posições</a>
        </li>
        <li>
            <a href="#shadows">Sombras</a>
        </li>
        <li>
            <a href="#tables">Tabelas</a>
        </li>
        <li>
            <a href="#screens">Telas</a>
        </li>
    </ul>
</aside>
<!-- Content -->
<main class="main snow md-90 p-2">
    <h1 class="mt-3 mb-3 fw-lighter">Documentação</h1>

    <div class="box-item" id="heights">
        <h2>Alturas</h2>
        <p>
            As classes de alturas são divididas em 3 categorias, elas representam três unidades de medidas:
            <code class="prop-name">rem</code>, <code class="prop-name">%</code> (porcentagem) e <code class="prop-name">vh</code>.
        </p>
<pre>
<code class="tags-name">&lt;header </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;h-10r&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/header&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;header </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;h-10&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/header&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;header </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;vh-10&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/header&gt;</code>
</pre>

        <p>
            Veja a seguir tabela das classes de medidas.
        </p>

        <table>
            <thead>
                <tr>
                    <th>rem</th>
                    <th>% (porcentagem)</th>
                    <th>vh</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>h-5r</td>
                    <td>h-10</td>
                    <td>vh-10</td>
                </tr>
                <tr>
                    <td>h-10r</td>
                    <td>h-20</td>
                    <td>vh-20</td>
                </tr>
                <tr>
                    <td>h-15r</td>
                    <td>h-30</td>
                    <td>vh-30</td>
                </tr>
                <tr>
                    <td>h-20r</td>
                    <td>h-40</td>
                    <td>vh-40</td>
                </tr>
                <tr>
                    <td>h-25r</td>
                    <td>h-50</td>
                    <td>vh-50</td>
                </tr>
                <tr>
                    <td>h-30r</td>
                    <td>h-60</td>
                    <td>vh-60</td>
                </tr>
                <tr>
                    <td>h-35r</td>
                    <td>h-70</td>
                    <td>vh-70</td>
                </tr>
                <tr>
                    <td>h-40r</td>
                    <td>h-80</td>
                    <td>vh-80</td>
                </tr>
                <tr>
                    <td>h-45r</td>
                    <td>h-90</td>
                    <td>vh-90</td>
                </tr>
                <tr>
                    <td>h-50r</td>
                    <td>h-100</td>
                    <td>vh-100</td>
                </tr>
            </tbody>
        </table>

    </div>

    <hr>

    <!-- Backgrounds -->
    <div class="box-item" id="backgrounds">
        <h2>Backgrounds</h2>
        <p>
            É muito simples colocar uma cor de fundo em um elemento, basta escrever o nome da cor desejada como classe.
        </p>
        
<pre>
<code class="tags-name">&lt;section </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;red&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/section&gt;</code>
</pre>
        <p>
            O Hare UI traz 15 tons principais + 130 outras cores separadas em um arquivo opcional.<br>
            Os principais tons são os seguintes:
        </p>
        <ul class="back-list">
            <li class="black">Black</li>
            <li class="blue">Blue</li>
            <li class="cyan">Cyan</li>
            <li class="dark">Dark</li>
            <li class="gray">Gray</li>
            <li class="green">Green</li>
            <li class="indigo">Indigo</li>
            <li class="light tc-dark border">Light</li>
            <li class="orange">Orange</li>
            <li class="pink">Pink</li>
            <li class="purple">Purple</li>
            <li class="red">Red</li>
            <li class="teal">Teal</li>
            <li class="white tc-dark border">White</li>
            <li class="yellow">Yellow</li>
        </ul>

        <p>
            Além dessas temos as classes <code class="txt-class">bg-inherit</code> para o valor
            <code class="prop-name">inherit</code> da propriedade <code class="prop-name">background</code> e
            <code class="txt-class">bg-none</code> para <code class="prop-name">background: none</code>.
        </p>

        <hr>

    <!-- Borders -->
    <div class="box-item" id="borders">
        <h2>Bordas</h2>
        <p>
            Para se colocar uma borda em um elemento, declare a classe <code class="txt-class">border</code>,
            isso criará uma borda do tipo sólida com <span>1px</span> de espessura.<br>
            Para escolher um tom para a borda, basta declarar o prefixo <code class="txt-class">border-</code>
            seguida do nome de uma das nossas cores principais.
        </p>
        <h3>Exemplos:</h3>
<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;border&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/div&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;border-blue&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/div&gt;</code>
</pre>
    <!-- Border Examples -->
    <div class="flex jc-around">
        <div class="aqua-marine border br-1 h-5r vw-20 p-1">
            <span >Elemento com borda</span>
        </div>

        <div class="aqua-marine border-blue br-1 h-5r vw-20 p-1">
            <span>Borda Azul</span>
        </div>
    </div>

    <p>
        <span>Obs:</span> Para definir um elemento como sem borda, adicione a classe <code class="txt-class">border-0</code>
    </p>
    </div>

    <hr>

    <!-- Border-Radius -->
    <div class="box-item" id="border-radius">
        <h2>Border-Radius</h2>
        <p>
            Existem 4 classes para o arrendondamento de bordas: <code class="txt-class">br-1</code>, <code class="txt-class">br-2</code>,
            <code class="txt-class">br-3</code> e <code class="txt-class">br-4</code>.<br>
            Veja elas em ação:
        </p>
<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;br-1&quot;</code><code class="tags-name">&gt;</code>Border-Radius com 0.5 rem<code class="tags-name">&lt;/div&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;br-2&quot;</code><code class="tags-name">&gt;</code>Border-Radius com 1 rem<code class="tags-name">&lt;/div&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;br-3&quot;</code><code class="tags-name">&gt;</code>Border-Radius com 1.5 rem<code class="tags-name">&lt;/div&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;br-4&quot;</code><code class="tags-name">&gt;</code>Border-Radius com 2 rem<code class="tags-name">&lt;/div&gt;</code>
</pre>
        <!-- BR Example -->
        <div class="flex jc-between tc-white mt-3">
            <div class="br-1 blue h-5r vw-20 p-1 m-1 ">Border-Radius com 0.5 rem</div>
            <div class="br-2 gray h-5r vw-20 p-1 m-1">Border-Radius com 1 rem</div>
            <div class="br-3 cyan h-5r vw-20 p-1 m-1">Border-Radius com 1.5rem</div>
        </div>
        <div class=" flex jc-center tc-white mt-3">
            <div class="br-4 orange h-5r p-1 pt-sm-1">Border-Radius com 2 rem</div>
        </div>

    </div>

    <hr>
    <!-- Buttons -->
    <div class="box-item" id="buttons">
        <h2>Botões</h2>
        <p>
            Um botão padrão pode ser estilizados pela classe principal <code class="txt-class">btn</code>,
            que deve ser seguida por uma classe de <a href="#backgrounds">background</a> comum.
        </p>
<pre>
<code class="tags-name">&lt;button </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;btn blue&quot;</code><code class="tags-name">&gt;</code>Button 1<code class="tags-name">&lt;/button&gt;</code>
</pre>
    <button class="btn blue">Button 1</button>

    <!-- Sizes Btn -->
    <h3>>> Tamanhos</h3>
    <p>
        Para alterar o <span>tamanho</span> dos botões, use as classes <code class="txt-class">btn-sm</code>, <code class="txt-class">btn-lg</code> e <code class="txt-class">btn-xl</code>.
    </p>
<pre>
<code class="tags-name">&lt;button </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;btn btn-sm green&quot;</code><code class="tags-name">&gt;</code>Btn sm<code class="tags-name">&lt;/button&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;button </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;btn btn-lg purple&quot;</code><code class="tags-name">&gt;</code>Btn lg<code class="tags-name">&lt;/button&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;button </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;btn btn-lg blue&quot;</code><code class="tags-name">&gt;</code>Btn xl<code class="tags-name">&lt;/button&gt;</code>
</pre>
    <!-- Sizes Example -->
    <div class="">
        <button class="btn btn-sm green m-1">Btn sm</button>
        <button class="btn btn-lg purple m-1">Btn lg</button>
        <button class="btn btn-xl blue m-1">Btn xl</button>
    </div>

    <h3>>>Outline</h3>

    <p>
        Para criar botões com efeito <span>outline</span>, acrescente as classes especiais, que são formadas pelo
        préfixo <code class="txt-class">btn-out-</code> seguida da cor desejada.
    </p>
<pre>
<code class="tags-name">&lt;button </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;btn btn-out-red&quot;</code><code class="tags-name">&gt;</code>Button 3<code class="tags-name">&lt;/button&gt;</code>
</pre>
    <button class="btn btn-out-red">Button 3</button>

    <h3>>>Botões Arredondados</h3>
    
    <p>
        Arredonde os cantos dos botões usando as nossas classes para alterar o seu <a href="#border-radius">
        Border-Radius</a>.
    </p>
<pre>
<code class="tags-name">&lt;button </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;btn cyan br-2&quot;</code><code class="tags-name">&gt;</code>Button 4<code class="tags-name">&lt;/button&gt;</code>
</pre>
    <button class="btn cyan br-2">Button 4</button>
    </div>

    <hr>

    <!-- Cards -->
    <div class="box-item" id="cards">
        <h2>Cards</h2>
        <p>
            Os cards são formados por 3 elementos: uma imagem, um título e um texto e 2 classes: a
            <code class="txt-class">box-card</code>, que engloba os itens e a <code class="txt-class">card-item</code>,
            que é o item em sí.<br>
            Veja um exemplo de card na nossa <a href="index.html#cards">HOME</a>.
        </p>
    </div>

    <hr>

    <!-- Colunas -->

    <div class="box-item" id="columns">
        <h2>Colunas / Grid</h2>
        <p>
            O sistema de colunas do Hare é dividido em 10 partes, cada uma contendo 10 % de largura.<br>
            As larguras são agrupadas nos nossos 3 <a href="#screens">tamanhos de tela padrão</a>: <code class="prop-name">sm</code>,
            <code class="prop-name">md</code> e <code class="prop-name">lg</code>.
        </p>
<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;sm-20&quot;</code><code class="tags-name">&gt;</code>20% de Largura no Tamanho sm<code class="tags-name">&lt;/div&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;md-20&quot;</code><code class="tags-name">&gt;</code>20% de Largura no Tamanho md<code class="tags-name">&lt;/div&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;lg-20&quot;</code><code class="tags-name">&gt;</code>20% de Largura no Tamanho lg<code class="tags-name">&lt;/div&gt;</code>
</pre>

    <p>
        Para que essas classes se adptem melhor aos diversos tamanhos de telas, você precisa
        colocá-las dentro da classe <code class="txt-class">row</code>.
    </p>

<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;row&quot;</code><code class="tags-name">&gt;</code>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;lg-50&quot;</code><code class="tags-name">&gt;</code>Exemplo<code class="tags-name">&lt;/div&gt;</code>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;lg-50&quot;</code><code class="tags-name">&gt;</code>Exemplo<code class="tags-name">&lt;/div&gt;</code>
<code class="tags-name">&lt;/div&gt;</code>
</pre>

    <div class="row">
        <div class="lg-50 pt-1 pb-1 orange"></div>
        <div class="lg-50 pt-1 pb-1 cyan"></div>
    </div>

    </div>

    <hr>


    <!-- Text Color -->
    <div class="box-item" id="text-colors">
        <h2>Cores de Texto</h2>
        <p>
            As classes de cores são formadas pelo prefixo <code class="txt-class">tc-</code> (abreviação de 'text color')
            seguido da cor escolhida.<br>
            Os tons são os mesmos das principais <a href="#backgrounds">classes de backgrounds</a>.
        </p>
<pre>
<code class="tags-name">&lt;p </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;tc-dark&quot;</code><code class="tags-name">&gt;</code>Exemplo de Texto<code class="tags-name">&lt;/p&gt;</code>
</pre>
    <p class="tc-dark">Exemplo de Texto</p>

    </div>

    <hr>

    <div class="box-item" id="display">
        <h2>Display</h2>
        <p>
            O Hare apresenta 4 classes principais para esta propriedade: <code class="txt-class">none</code>, para
            o valor <code class="prop-name">display: none</code>, <code class="txt-class">block</code>, para
            <code class="prop-name">display: block</code>, <code class="txt-class">inline</code> para
            <code class="prop-name">display: inline</code> e <code class="txt-class">inline-block</code> para
            <code class="prop-name">display: inline-block</code>.<br>
            Veja a seguir outras classes para tamanhos de tela. Para saber mais sobre as <span>Media Queries,</span>
            veja a seção <a href="#screens">Telas</a>.
        </p>
        <table>
            <caption class="fz-1h">Media Queries</caption>
            <thead>
                <tr>
                    <th>Small</th>
                    <th>Medium</th>
                    <th>Large</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>sm-none</td>
                    <td>md-none</td>
                    <td>lg-none</td>
                </tr>
                <tr>
                    <td>sm-block</td>
                    <td>md-block</td>
                    <td>lg-block</td>
                </tr>
                <tr>
                    <td>sm-only</td>
                    <td>md-only</td>
                    <td>lg-only</td>
                </tr>
            </tbody>
        </table>

        <p>
            <span>Obs.</span> O prefixo <code class="txt-class">-only</code> significa que o elemento que tiver
            essa classe será visível apenas para o tamanho de tela específicado.
        </p>

    </div>

    <hr>

    <div class="box-item" id="flexbox">
        <h2>Flexbox</h2>
        <p>
            Para transformar um elemento em um <code class="prop-name">flex container</code> adicione à ele
            a classe <code class="txt-class">flex</code>.
            <br>Para definir se os elementos dentro de um flex container vão ou não ter quebra de linha, use as classes <code class="txt-class">wrap</code> e <code class="txt-class">no-wrap</code>.
        </p>
<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;flex&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/div&gt;</code>
</pre>
        <p>
            <i>Lista com todas as classes do flexbox:</i>
        </p>
        <div class="flex">
            <div>
                <ul class="fd-list">
                    <li class="mb-1">Flex Direction</li>
                    <li><code class="txt-class">fd-row</code></li>
                    <li><code class="txt-class">fd-row-reverse</code></li>
                    <li><code class="txt-class">fd-col</code></li>
                    <li><code class="txt-class">fd-col-reverse</code></li>
                    <li><code class="txt-class">fd-md-row</code></li>
                    <li><code class="txt-class">fd-md-reverse</code></li>
                    <li><code class="txt-class">fd-md-col</code></li>
                    <li><code class="txt-class">fd-md-col-reverse</code></li>
                    <li><code class="txt-class">fd-sm-row</code></li>
                    <li><code class="txt-class">fd-sm-reverse</code></li>
                    <li><code class="txt-class">fd-sm-col</code></li>
                    <li><code class="txt-class">fd-sm-col-reverse</code></li>
                </ul class="m-sm-0">
            </div>
            <div>
                <ul>
                    <li class="mb-1">Justify Content</li>
                    <li><code class="txt-class">jc-start</code></li>
                    <li><code class="txt-class">jc-end</code></li>
                    <li><code class="txt-class">jc-center</code></li>
                    <li><code class="txt-class">jc-between</code></li>
                    <li><code class="txt-class">jc-around</code></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class="mb-1">Align Items</li>
                    <li><code class="txt-class">ai-start</code></li>
                    <li><code class="txt-class">ai-end</code></li>
                    <li><code class="txt-class">ai-center</code></li>
                    <li><code class="txt-class">ai-baseline</code></li>
                    <li><code class="txt-class">ai-stretch</code></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class="mb-1">Align Content</li>
                    <li><code class="txt-class">ac-start</code></li>
                    <li><code class="txt-class">ac-end</code></li>
                    <li><code class="txt-class">ac-center</code></li>
                    <li><code class="txt-class">ac-baseline</code></li>
                    <li><code class="txt-class">ac-stretch</code></li>
                    <li><code class="txt-class">ac-between</code></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class="mb-1">Align Self</li>
                    <li><code class="txt-class">as-start</code></li>
                    <li><code class="txt-class">as-end</code></li>
                    <li><code class="txt-class">as-center</code></li>
                    <li><code class="txt-class">as-baseline</code></li>
                    <li><code class="txt-class">as-stretch</code></li>
                </ul>
            </div>
        </div>
        <h3>- Centralizar</h3>
        <p>
            O Hare tem uma classe especial para facilitar a <a href=""></a> centralização de elementos chamada
            <code class="txt-class">centralize</code>, que adiciona as propriedades
            <code class="prop-name">justify-content: center</code> e <code class="prop-name">align-items: center</code>.
            Alinhando assim o conteúdo tanto na horizontal como na vertical.
        </p>
    </div>

    <hr>

    <div class="box-item" id="fonts">
        <h2>Fontes</h2>

        <h3>- Alinhamento de Texto</h3>
        <p>
            Use uma das seguintes classes para alinhar os seus textos: <code class="txt-class">ta-left</code>,
            <code class="txt-class">ta-center</code>, <code class="txt-class">ta-right</code> e <code class="txt-class">ta-justify</code>.
        </p>
<pre>
<code class="tags-name">&lt;p </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;ta-center&quot;</code><code class="tags-name">&gt;</code>Texto Centralizado<code class="tags-name">&lt;/p&gt;</code>
</pre>

        <p class="ta-center">Texto Centralizado</p>

        <h3>- Famílias de Fontes</h3>
        <p>
            O Hare CSS apresenta 12 Classes para a estilização de fontes.
        </p>
<pre>
<code class="tags-name">&lt;p </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;verdana&quot;</code><code class="tags-name">&gt;</code>Exemplo de Texto<code class="tags-name">&lt;/p&gt;</code>
</pre>

    <div class="flex">
        <!-- Class Names -->
        <ul class="font-list">
            <li class="fz-1h">Classes</li>
            <li class="txt-class">arial</li>
            <li class="txt-class">times</li>
            <li class="txt-class">helvetica</li>
            <li class="txt-class">verdana</li>
            <li class="txt-class">courier</li>
            <li class="txt-class">arial-narrow</li>
            <li class="txt-class">genebra</li>
            <li class="txt-class">calibri</li>
            <li class="txt-class">cambria</li>
            <li class="txt-class">monaco</li>
            <li class="txt-class">didot</li>
            <li class="txt-class">brush-script</li>
        </ul>

        <ul class="font-list">
            <!-- Text Example -->
            <li class="fz-1h">Exemplos</li>
            <li class="arial fz-1h">Exemplo de Texto com a fonte Arial</li>
            <li class="times fz-1h">Exemplo de Texto com a fonte Times</li>
            <li class="helvetica fz-1h">Exemplo de Texto com a fonte Helvética</li>
            <li class="verdana fz-1h">Exemplo de Texto com a fonte Verdana</li>
            <li class="courier fz-1h">Exemplo de Texto com a fonte Courier</li>
            <li class="arial-narrow fz-1h">Exemplo de Texto com a fonte Arial-Narrow</li>
            <li class="genebra fz-1h">Exemplo de Texto com a fonte Genebra</li>
            <li class="calibri fz-1h">Exemplo de Texto com a fonte Calibri</li>
            <li class="cambria fz-1h">Exemplo de Texto com a fonte Cambria</li>
            <li class="monaco fz-1h">Exemplo de Texto com a fonte Mônaco</li>
            <li class="didot fz-1h">Exemplo de Texto com a fonte Didot</li>
            <li class="brush-script fz-1h">Exemplo de Texto com a fonte Brush Script MT</li>
        </ul>
    </div>

    <h3>>> Tamanhos de Fonte</h3>
    <p>
        Existem um grupo com 7 diferentes classes para o ajustar o tamanhos de fontes, que são:<br>
        <code class="txt-class">fz-1</code>, <code class="txt-class">fz-1h</code>, <code class="txt-class">fz-2</code>
        <code class="txt-class">fz-2h</code>, <code class="txt-class">fz-3</code>, <code class="txt-class">fz-3h</code> e
        <code class="txt-class">fz-4</code>.<br>
        Cada número faz referência ao tamanho em <code class="prop-name">rems</code>, unidade padrão deste framework.<br>
        O <code class="prop-name">'h'</code> significa <code class="prop-name">half</code> (meio), acrescenta 0.5rem
        ao número que o antecede. Ex. <code class="txt-class">fz-2h</code> é igual à <code class="prop-name">2.5rem</code>.
    </p>
<pre>
<code class="tags-name">&lt;p </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;fz-2&quot;</code><code class="tags-name">&gt;</code>Exemplo de Texto<code class="tags-name">&lt;/p&gt;</code>
</pre>

    <p class="fz-2">Exemplo de Texto</p>

    <h3>>> Espessura da Fonte</h3>
    <p>
        Há duas categorias de classes para atribuir uma espessura à uma fonte: pelo nome no atributo
        <code class="txt-class">fw-lighter</code>, <code class="txt-class">fw-normal</code>,
        <code class="txt-class">fw-bold</code> e <code class="txt-class">fw-bolder</code> ou pelo número:
        que vai do <code class="txt-class">fw-200</code> ao <code class="txt-class">fw-800</code>.
    </p>
<pre>
<code class="tags-name">&lt;h1 </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;fw-bold&quot;</code><code class="tags-name">&gt;</code>Bold<code class="tags-name">&lt;/h1&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;h1 </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;fw-400&quot;</code><code class="tags-name">&gt;</code>Font Weight: 400<code class="tags-name">&lt;/h1&gt;</code>
</pre>

    <h3>>> Estilo da Fonte</h3>
    <p>
        Para adicionar uma propriedade <code class="prop-name">font-style</code> use as classes <code class="txt-class">fs-italic</code>,
        <code class="txt-class">fs-normal</code> e <code class="txt-class">fs-oblique</code>.
    </p>

<pre>
<code class="tags-name">&lt;p </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;fs-italic&quot;</code><code class="tags-name">&gt;</code>Italic<code class="tags-name">&lt;/p&gt;</code>
</pre>

    <h3>>> Cabeçalhos</h3>
    <p>
        Há dois grupos de classes para ajustar o tamanhos dos cabeçalhos, um para criar
        cabeçalhos pequenos, que são formadas pelas classes com o nome da tag + <code class="txt-class">'-sm'</code>,
        ex. <code class="txt-class">h1-sm</code>. E o outro para torná-los grandes, ele é formado por classes
        semelhantes ao primeiro, distinguindo-se apenas usar o prefixo <code class="txt-class">'-lg'</code>.
    </p>

<pre>
<code class="tags-name">&lt;h2 </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;h2-sm&quot;</code><code class="tags-name">&gt;</code>Cabeçalho pequeno<code class="tags-name">&lt;/h2&gt;</code>
</pre>

<pre>
<code class="tags-name">&lt;h2 </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;h2-lg&quot;</code><code class="tags-name">&gt;</code>Cabeçalho grande<code class="tags-name">&lt;/h2&gt;</code>
</pre>

    <h2 class="h2-sm tc-dark ta-left">Cabeçalho h2 pequeno</h2>
    <h2 class="h2-lg tc-dark ta-left">Cabeçalho h2 Grande</h2>

    </div>

    <hr>

    <div class="box-item" id="forms">
        <h2>Formulários</h2>
        <p>
            Para com estilizar use a classe <code class="txt-class">form</code> seguida das classes
            de sua preferência.<br>
            Para os <code class="prop-name">inputs</code> que contenham texto, use as classes com o prefixo
            <code class="txt-class">input-</code> seguido do nome das nossas principais
            <a href="#text-colors">Cores Padrão</a>.
        </p>
<pre>
<code class="tags-name">&lt;input </code><code class="att-class">type</code><code class="equal">=</code><code class="class-name">&quot;text&quot; </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;input-purple&quot;</code><code class="tags-name">&gt;</code>
</pre>

    <input type="text" class="input-purple">
        
    </div>

    <hr>

    <div class="box-item" id="images">
        <h2>Imagens</h2>
        <p>
            Para deixar as suas imagens responsivas, use a classe <code class="txt-class">box-img</code>,
            essa classe adiciona uma <code class="prop-name">max-width</code> de <code class="prop-name">100%</code>,
            fazendo com que ela se adeque dentro do seu elemento pai.
        </p>

<pre>
<code class="tags-name">&lt;img </code><code class="att-class">src</code><code class="equal">=</code><code class="class-name">&quot;img.jpg&quot; </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;box-img&quot;</code><code class="tags-name">&gt;</code>
</pre>

    </div>

    <hr>

    <div class="box-item" id="links">
        <h2>Links</h2>
        <p>
            Use as classes <code class="txt-class">active</code> e <code class="txt-class">disable</code> para
            referenciar o estado dos seus links.
        </p>
<pre>
<code class="tags-name">&lt;a </code><code class="att-class">href</code><code class="equal">=</code><code class="class-name">&quot;#&quot; </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;active&quot;</code><code class="tags-name">&gt;</code></code><code class="tags-name">&lt;/a&gt;</code>
</pre>

    <a href="#" class="active">Link ativo</a>

    </div>

    <hr>

    <div class="box-item" id="margins">
        <h2>Margens / Paddings</h2>
        <p>
            As classes que definem margens são dividas em dois grandes grupos, um para tamanhos médios
            e grandes (tabelas 1 e 2) e outro para dispositivos com telas pequenas (tabela 3).<br>
            O primeiro, por sua vez é sub-dividido em dois níveis de grandeza, o de
            <code class="prop-name">0 à 5 rems</code>, e o de <code class="prop-name">10 à 30 rems</code>
            com excessão da propriedade <code class="prop-name">margin</code>, que é formado apenas
            pelo primeiro.<br>
        </p>

        <table>
            <caption class="fz-1h" id="table">Tabela 1</caption>
            <thead>
                <tr>
                    <th>Margin</th>
                    <th>Top</th>
                    <th>Right</th>
                    <th>Bottom</th>
                    <th>Left</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>m-0</td>
                    <td>mt-0</td>
                    <td>mr-0</td>
                    <td>mb-0</td>
                    <td>ml-0</td>
                </tr>
                <tr>
                    <td>m-1</td>
                    <td>mt-1</td>
                    <td>mr-1</td>
                    <td>mb-1</td>
                    <td>ml-1</td>
                </tr>
                <tr>
                    <td>m-2</td>
                    <td>mt-2</td>
                    <td>mr-2</td>
                    <td>mb-2</td>
                    <td>ml-2</td>
                </tr>
                <tr>
                    <td>m-3</td>
                    <td>mt-3</td>
                    <td>mr-3</td>
                    <td>mb-3</td>
                    <td>ml-3</td>
                </tr>
                <tr>
                    <td>m-4</td>
                    <td>mt-4</td>
                    <td>mr-4</td>
                    <td>mb-4</td>
                    <td>ml-4</td>
                </tr>
                <tr>
                    <td>m-5</td>
                    <td>mt-5</td>
                    <td>mr-5</td>
                    <td>mb-5</td>
                    <td>ml-5</td>
                </tr>
            </tbody>
        </table>

    <table>
            <caption class="fz-1h">Tabela 2</caption>
            <thead>
                <tr>
                    <th>Top</th>
                    <th>Right</th>
                    <th>Bottom</th>
                    <th>Left</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>mt-10</td>
                    <td>mr-10</td>
                    <td>mb-10</td>
                    <td>ml-10</td>
                </tr>
                <tr>
                    <td>mt-15</td>
                    <td>mr-15</td>
                    <td>mb-15</td>
                    <td>ml-15</td>
                </tr>
                <tr>
                    <td>mt-20</td>
                    <td>mr-20</td>
                    <td>mb-20</td>
                    <td>ml-20</td>
                </tr>
                <tr>
                    <td>mt-25</td>
                    <td>mr-25</td>
                    <td>mb-25</td>
                    <td>ml-25</td>
                </tr>
                <tr>
                    <td>mt-30</td>
                    <td>mr-30</td>
                    <td>mb-30</td>
                    <td>ml-30</td>
                </tr>
            </tbody>
        </table>

        <table>
            <caption class="fz-1h">Tabela 3</caption>
            <thead>
                <tr>
                    <th>Margin</th>
                    <th>Top</th>
                    <th>Right</th>
                    <th>Bottom</th>
                    <th>Left</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>m-sm-0</td>
                    <td>mt-sm-0</td>
                    <td>mr-sm-0</td>
                    <td>mb-sm-0</td>
                    <td>ml-sm-0</td>
                </tr>
                <tr>
                    <td>m-sm-1</td>
                    <td>mt-sm-1</td>
                    <td>mr-sm-1</td>
                    <td>mb-sm-1</td>
                    <td>ml-sm-1</td>
                </tr>
                <tr>
                    <td>m-sm-2</td>
                    <td>mt-sm-2</td>
                    <td>mr-sm-2</td>
                    <td>mb-sm-2</td>
                    <td>ml-sm-2</td>
                </tr>
                <tr>
                    <td>m-sm-3</td>
                    <td>mt-sm-3</td>
                    <td>mr-sm-3</td>
                    <td>mb-sm-3</td>
                    <td>ml-sm-3</td>
                </tr>
                <tr>
                    <td>m-sm-4</td>
                    <td>mt-sm-4</td>
                    <td>mr-sm-4</td>
                    <td>mb-sm-4</td>
                    <td>ml-sm-4</td>
                </tr>
                <tr>
                    <td>m-sm-5</td>
                    <td>mt-sm-5</td>
                    <td>mr-sm-5</td>
                    <td>mb-sm-5</td>
                    <td>ml-sm-5</td>
                </tr>
            </tbody>
        </table>
        
        <h3>>>Paddings</h3>
        <p>
            Os paddings funcionam de modo semelhante, a grande diferença que não existem as classes que estão listadas na tabela 2. Além das classes começarem com a letra <code class="prop-name">'p'</code>.
        </p>

    </div>

    <hr>

    <div class="box-item" id="navbar">
        <h2>Navbar</h2>
        <h3>>> Navbox</h3>
        <p>
            Para começar a estilizar a nossa barra de navegação, adicione a classe
            <code class="txt-class">navbox</code> à tag <code class="prop-name">nav</code>.<br>
            Para adicionar cor ao navbar escolha uma de nossos <a href="#backgrounds">15 tons principais</a> ou um dos 
            130 tons adicionais.<br>
            Para deixar o seu menu fixo adicione a classe <code class="txt-class">nav-fixed</code>.
        </p>

        <h3>>> Logo</h3>
        <p>
            Coloque o seu logotipo dentro de uma <code class="prop-name">âncora</code> com a classe
            <code class="txt-class">nav-brand</code>.
        </p>

        <h3>>> Navlist</h3>
        <p>
            A sua lista de links deve estar dentro de uma <code class="prop-name">div</code> com
            a classe <code class="txt-class">nav-list</code>.
        </p>

        <h3>>> Links </h3>
        <p>
            Estilize os links do menu adicionando as nossas classes para <a href="#fonts">fontes</a>.
        </p>

        <h3>>> Botão Mobile </h3>
        <p>
            Para que o botão de abertura do menu para dispositivos móveis funcione corretamente
            é necessário adicionar a classe <code class="txt-class">open-menu</code> ao seu ícone
            ou imagem.
        </p>

    </div>

    <hr>

    <div class="box-item" id="overflow">
        <h2>Overflow</h2>
        <p>
            Há 5 classes que representam propriedades do <code class="prop-name">overflow</code>, são
            elas: <code class="txt-class">of-auto</code>, <code class="txt-class">of-hidden</code>,
            <code class="txt-class">of-scroll</code>, <code class="txt-class">of-visible</code> e <code class="txt-class">of-inherit</code>.
        </p>
    </div>

<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;of-hidden&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/div&gt;</code>
</pre>

    <hr>

    <div class="box-item" id="positions">
        <h2>Posições</h2>
        <p>
            As propriedades do <code class="prop-name">position</code> são configuradas pelas classes
            <code class="txt-class">relative</code>, <code class="txt-class">absolute</code>,
            <code class="txt-class">fixed</code>, <code class="txt-class">sticky</code> e <code class="txt-class">static</code>.<br>
            Existem também as classes <code class="txt-class">top</code>, <code class="txt-class">right</code>,
            <code class="txt-class">bottom</code> e <code class="txt-class">left</code>, cada uma setando
            o valor <code class="prop-name">0</code> no elemento.

        </p>

<pre>
<code class="tags-name">&lt;section </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;relative&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/section&gt;</code>
</pre>

    </div>

    <hr>

    <div class="box-item" id="tables">
        <h2>Tabelas</h2>
        <p>
            O Hare CSS já traz o elemento <code class="prop-name">table</code> pré-estilizado, ou seja, você não precisa adicionar uma classe para montar uma tabela básica.
            Você pode ver um exemplo desse tipo de tabela <a href="#table">aqui mesmo</a>, na nossa documentação.<br>
            Mas existem classes que você pode adicionar à <span>tag</span> <code class="prop-name">table</code> que modificam o estilo da tabela, como você verá à seguir.
        </p>

        <h3>- Dark</h3>
        <p>
            A classe <code class="txt-class">dark-table</code>, por exemplo, adiciona cores escuras a nossa tabela.
        </p>

        <!-- Dark Table -->
        <table class="dark-table">
            <caption class="fz-1h">Dark</caption>
            <!-- THeaders -->
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>Idade</th>
                </tr>
            </thead>
    
            <tbody>
            <!-- TDates -->
            <tr>
                <td>Jonh</td>
                <td>jonh12@gmail.com</td>
                <td>Crateús</td>
                <td>21</td>
            </tr>
            
            <tr>
                <td>Oliver</td>
                <td>oliver10@gmail.com</td>
                <td>Orlando</td>
                <td>34</td>
            </tr>
    
            <tr>
                <td>Igor</td>
                <td>igor21@gmail.com</td>
                <td>São Paulo</td>
                <td>18</td>
            </tr>
    
            <tr>
                <td>Kauana</td>
                <td>kauana22@gmail.com</td>
                <td>Sobral</td>
                <td>27</td>
            </tr>
    
            </tbody>
        </table>

        <h3>- Listras</h3>
        <p>
            As classes <code class="txt-class">striped</code> e <code class="txt-class">dark-striped</code>
            criam tabelas listradas.
        </p>
        <!-- Striped Table -->
        <table class="striped">
            <caption class="fz-1h">Striped</caption>
            <!-- THeaders -->
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>Idade</th>
                </tr>
            </thead>

            <tbody>
            <!-- TDates -->
            <tr>
                <td>Jonh</td>
                <td>jonh12@gmail.com</td>
                <td>Crateús</td>
                <td>21</td>
            </tr>
            
            <tr>
                <td>Oliver</td>
                <td>oliver10@gmail.com</td>
                <td>Orlando</td>
                <td>34</td>
            </tr>

            <tr>
                <td>Igor</td>
                <td>igor21@gmail.com</td>
                <td>São Paulo</td>
                <td>18</td>
            </tr>

            <tr>
                <td>Kauana</td>
                <td>kauana22@gmail.com</td>
                <td>Sobral</td>
                <td>27</td>
            </tr>

            </tbody>
        </table>

        <!-- Striped Dark -->
        <table class="dark-striped">
            <caption class="fz-1h">Dark Striped</caption>
            <!-- THeaders -->
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>Idade</th>
                </tr>
            </thead>
    
            <tbody>
            <!-- TDates -->
            <tr>
                <td>Jonh</td>
                <td>jonh12@gmail.com</td>
                <td>Crateús</td>
                <td>21</td>
            </tr>
            
            <tr>
                <td>Oliver</td>
                <td>oliver10@gmail.com</td>
                <td>Orlando</td>
                <td>34</td>
            </tr>
    
            <tr>
                <td>Igor</td>
                <td>igor21@gmail.com</td>
                <td>São Paulo</td>
                <td>18</td>
            </tr>
    
            <tr>
                <td>Kauana</td>
                <td>kauana22@gmail.com</td>
                <td>Sobral</td>
                <td>27</td>
            </tr>
    
            </tbody>
        </table>

    </div>

    <hr>

    <div class="box-item" id="shadows">
        <h2>Sombras</h2>
        <p>
            Existem 5 classes relacionadas à propriedade <code class="prop-name">box-shadow</code>. Com
            4 níveis diferentes de sombras.
        </p>
        <h3>- Classes</h3>
        <ul>
            <li class="txt-class">shadow</li>
            <li class="txt-class">shadow-2</li>
            <li class="txt-class">shadow-3</li>
            <li class="txt-class">shadow-4</li>
            <li class="txt-class">shadow-none</li>
        </ul>

<pre>
<code class="tags-name">&lt;div </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;shadow&quot;</code><code class="tags-name">&gt;</code><code class="tags-name">&lt;/div&gt;</code>
</pre>

<!-- BR Example -->
<div class="flex jc-between tc-white mt-3">
    <div class="br-1 blue shadow h-5r vw-20 p-1 m-1 ">Shadow</div>
    <div class="br-1 blue shadow-2 h-5r vw-20 p-1 m-1">Shadow 2</div>
    <div class="br-1 blue shadow-3 h-5r vw-20 p-1 m-1">Shadow 3</div>
</div>
<div class=" flex jc-center tc-white mt-3">
    <div class="br-1 blue shadow-4 h-5r p-1 pt-sm-1">Shadow 4</div>
</div>

    <h3>- Sombra no texto</h3>
    <p>
        Coloque sombra nos seus textos adicionando a classe <code class="txt-class">txt-shadow</code>.
    </p>

<pre>
<code class="tags-name">&lt;p </code><code class="att-class">class</code><code class="equal">=</code><code class="class-name">&quot;txt-shadow&quot;</code><code class="tags-name">&gt;</code>Texto com sombra<code class="tags-name">&lt;/p&gt;</code>
</pre>

    <p class="txt-shadow">Texto com sombra</p>

    <hr>

    <div class="box-item" id="screens">
        <h2>Telas</h2>
        <p>
            As nossas classes que usam <code class="prop-name">Media Queries</code> são formadas
            por três faixas: a primeira, que cobre dispositivos com até <code class="prop-name">576px</code>
            de largura e têm o prefixo <code class="txt-class">sm</code>. A segunda, que vai de <code class="prop-name">576.1px</code> até <code class="prop-name">992px</code> de largura e o seu prefixo
            é o <code class="txt-class">md</code> e a terceira, que abrange dispositivos que tenham mais de <code class="prop-name">992px</code>, representado por <code class="txt-class">lg</code>.
        </p>
    </div>

    <hr>

</main>

<?php
    include_once 'includes/footer.php';
?>

<!-- JS -->
<script src="js/navbar.js"></script>
<script src="js/doc.js"></script>
<script src="js/foot.js"></script>
</body>

</html>