<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Search Sound</title>
    <?php include 'includes/link.php'; ?>
</head>

<body>
    <!-- <header> -->
    <?php 
        $pagina='index';
        include 'includes/menu.php'; ?>
    <!-- </header> -->

    <div class="container">
        <div class="row">
            <div class="carroul-l col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                <a href="samba.php">
                    <img src="dist/img/rock-main.jpg" alt="Imagem representativa cartoonizada de uma roda de samba ao pé do cristo redentor com um conjunto de casas fazendo referencia a uma favela">
                </a>
            </div>

            <div class="carroul-r col-lg-6 col-md-6 col-sm-12 col-xs-12 toggle-img">
                <a href="rock.php">
                    <img src="dist/img/rock-second.jpg" alt="Foto preto e branco de um show de rock com um homem em pé tpcando uma guitarra e um vocalista semi deitado ao chão cantando">
                </a>
                <div class="carroul-rd">
                    <a href="pagode.php">
                        <img src="dist/img/pagode-three.jpg" alt="Imagem de uma pessoa tocando um violão da cor laranja com o fundo desfocado">
                    </a>
                </div>
            </div>
        </div>
        <hr class="prop">
    </div>

    <div class="container">

        <h2 tabindex="0" class="h2-index">História</h2>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="rock.php">
                    <img class="mb-3" src="dist/img/rock-1.jpg" alt="Imagem em preto e branco do vocalista do Nirvana - Kurt Cobain tocando guitarra e cantando em um microfone em pé ">
                </a>
                <a href="rock.php">
                    <strong>Rock</strong>
                </a>
                <p tabindex="0" class="py-2">Este gênero musical de grande sucesso surgiu nos Estados Unidos nos anos 50 (década de 1950).
                    Inovador e diferente de tudo que já tinha ocorrido na música. <a href="rock.php">Veja mais...</a>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="samba.php">
                    <img class="mb-3" src="dist/img/samba-historia.jpg" alt="Imagem em preto e branco de um Grupo com cinco músicos tocando instrumentos de samba">
                </a>
                <a href="samba.php">
                    <strong>Samba</strong>
                </a>
                <p tabindex="0" class="py-2">O samba foi introduzido no Brasil no período colonial pelos escravos africanos sendo portanto um estilo que provém da fusão entre as culturas africana e brasileira. <a href="samba.php">Veja mais...</a>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="pagode.php">
                    <img class="mb-3" src="dist/img/pagode-historia.jpg" alt="Imagem em preto e branco do Cantor Alexandre Pires cantando e tocando o instrumento cavaco">
                </a>
                <a href="pagode.php">
                    <strong>Pagode</strong>
                </a>
                <p tabindex="0" class="py-2">O pagode surgiu das festas e comemorações feitas nos fundos dos quintais do subúrbio carioca,
                    nas quais se cantava as alegrias e os lamentos das pessoas que lá viviam. <a href="pagode.php">Veja mais...</a>
                </p>
            </div>
        </div>
        <hr class="prop">
    </div>

    <div class="container spacebtm">
        <h2 tabindex="0" class="h2-index">Instrumentos</h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                <a href="rock-inst.php"><img src="dist/img/rock.jpg" alt="Instrumentos relacionados ao estilo musical rock n' roll"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                <a href="samba-inst.php"><img src="dist/img/samba.jpg" alt="Instrumentos relacionados ao estilo musical samba"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                <a href="pagode-inst.php"><img src="dist/img/pagode.jpg" alt="Instrumentos relacionados ao estilo musical pagode"></a>
            </div>
        </div>
        <hr class="prop">
    </div>

    <!-- <footer> -->
    <?php include 'includes/footer.php'; ?>
    <!-- </footer> -->

    <?php include 'includes/script.php'; ?>
</body>

</html>
