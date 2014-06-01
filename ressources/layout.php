<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>dev</title>
        <style>
        body {
            font-family: 'Open Sans';
            font-size: 16px;
            line-height: 20px;
            color: #555;
            background-color: #F5F5F5;
            padding: 0;
            margin: 0;
            position: relative;
            padding-top: 4em;
        }
        h1 {
            font-weight: normal;
        }
        .formulator_debug {
            width: 50%;
            float: left;
            margin: 0;
            margin-top: -4em;
            height: 108%;
            overflow-y: scroll;
        }
            .formulator_debug pre {
                margin: 0 !important;
                font-size: 0.9em;
            }
        .formulator_form {
            width: 47%;
            float: right;
        }
        .formulator_form h1 {
            margin-bottom: 1em;
            color: #118EB3;
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
    </head>
    <body>
        <nav>
            <ul>
            <? foreach ($nav as $page): ?><li<?= ($current_page == $page ? ' class="current"' : '') ?>><a href="?page=<?= $page ?>"><?= $page ?></a></li><? endforeach; ?>
            </ul>
        </nav>
        <?
        echo $content;

        // time
        $time_end = microtime(true);
        //dividing with 60 will give the execution time in minutes other wise seconds
        $execution_time = ($time_end - $time_start);
        //execution time of the script
        echo '<p style="position: absolute; top:0; right: 10%;">Execution Time: '.round($execution_time,4).' seconds Memory usage: '.round(memory_get_peak_usage()/10E6,4).' MB</p>';
        ?>
    </body>
</html>