<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>dev</title>
        <style>
        html, body {
            height:100%;
        }
        body {
            font-family: 'Open Sans';
            font-size: 16px;
            line-height: 20px;
            color: #555;
            background-color: #F5F5F5;
            padding: 0;
            margin: 0;
        }
        #debug {
            background-color: #333;
            float: left;
            height: 100%;
            left: 0;
            margin: 0;
            overflow-y: scroll;
            width: 50%;
        }
            #debug pre {
                color: #ccc;
                font-size: 0.9em;
                line-height: 1.2em;
                margin: 0 !important;
                margin-bottom: 2em;
                padding: 20px;
            }
            #debug ul {
                background-color: #272727;
                color: #858585;
                margin: 0;
                padding: 10px 20px 0 20px;
            }
            #debug a {
                color: inherit;
                display: inline-block;
                outline: 0;
                padding: 10px 20px 20px;
                text-decoration: none;
            }
            #debug ul li {
                display: inline;
                font-size: 1.5em;
                padding: 0 1em;
            }
            #debug .ui-state-active a {
                background-color: #333;
                color: #fff;
            }
        .formulator_form {
            width: 47%;
            float: right;
        }

        nav {
            position: absolute;
            right: 1em;
            top: 0.5em;
        }

        nav ul {
            font-size: 0.8em;
            list-style-type: none;
        }


        /* Formulator CSS */
        
        form {
            display: table;
            /* devkit particular */
            padding: 4em 0 0 2em;
        }

        input,
        textarea,
        select,
        button {
            font-family: 'Open Sans';
            font-size: 16px;
            line-height: 20px;
            color: #555;
        }

        div.invalid input,
        div.invalid textarea {
            border-color: #ED591A;
        }
        form .error {
            color: #ED591A;
        }
         
        form > div {
            display: table-row;
        }
        label,
        form div div {
            display: table-cell;
        }
        label {
            padding: 0.5em 3em 0.5em 0.5em;
        }
        form > div:last-of-type div {
            padding-top: 1em;
        }
        </style>
        <script src="components/jquery/jquery.min.js"></script>
        <script src="components/jquery-ui/jquery-ui-built.js"></script>
         <script>
            $(function() {
            $( "#debug" ).tabs();
            });
        </script>
    </head>
    <body>
        <nav>
            <ul>
            <? foreach ($nav as $page): ?><li<?= ($current_page == $page ? ' class="current"' : '') ?>><a href="?page=<?= $page ?>"><?= $page ?></a></li><? endforeach; ?>
            </ul>
        </nav>
        <div id="debug"><ul><li><a href="#debug-2">Object</a></li><li><a href="#debug-1">Source</a></li></ul><pre id="debug-1"><?= $source ?></pre><pre id="debug-2"><? print_r($formulator) ?></pre></div>
        <?= $content; ?>
        <p style="position: absolute; top:0; right: 10%;">Execution Time: <?= round((microtime(true) - $time_start), 4); ?> s Memory usage: <?= round(memory_get_peak_usage()/10E6,4) ?> MB</p>
    </body>
</html>