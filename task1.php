<?php

function formatDescription($content, $url)
{
  $shortDescription = substr($content, 0, 140);
  $words = explode(" ", $shortDescription);
  $search = $words[count($words) - 2] . " " . $words[count($words) - 1];
  unset($words);
  $link = '<a href="' . $url . '">' . $search . '...</a>';

  return str_ireplace($search, $link, $shortDescription);
}


$content = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem explicabo assumenda consequatur, cumque, illum dolores nisi in reprehenderit voluptatibus voluptates, sit voluptas accusamus exercitationem earum! Officia ipsum voluptates illo aliquid.
Architecto, odio dignissimos. Quae quis veritatis qui unde perferendis in suscipit, debitis sapiente pariatur? Error ratione quam adipisci harum velit eum ab libero fugit atque aliquam. Sint harum eos modi!
Reprehenderit eum, blanditiis pariatur provident ex eius? Nihil optio officiis corporis obcaecati. Aperiam consectetur quod impedit iste sint nulla autem totam recusandae nostrum consequuntur aspernatur, culpa minus illo ut itaque?
Expedita reiciendis quae ut explicabo sed iste natus autem earum dicta, est dolorum, perspiciatis commodi, vitae ipsum! Nihil unde quisquam sint quas, necessitatibus quis eum, saepe, perspiciatis tempora laudantium atque.
Distinctio ipsa blanditiis reprehenderit tempora vero saepe magnam ut rerum porro aliquam exercitationem eius perferendis cumque aut harum facilis asperiores, quasi beatae maiores iure assumenda! Omnis at aliquam magni ullam?";


$url = '/full-post.html';

$shortDescription = formatDescription($content, $url);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task1</title>
</head>

<body>
  <main>
    <article>
      <?= $shortDescription ?>
    </article>
  </main>
</body>

</html>