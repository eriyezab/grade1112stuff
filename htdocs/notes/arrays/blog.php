<!--  USEFUL FUNCTIONS:

strtotime()
nl2br()
date()
str_replace()
preg_replace()
array_multisort()

Extension activity: -->


<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Eriyeza's Blog</title>

<style>

h1
{
text-align: center;
}

div
{
border-style: solid;
margin-right: 100px;
margin-left: 100px;
padding-right: 15px;
padding-left: 15px;
}
h2
{
text-align: center;
}
h3
{
font-weight: normal;
}
b
{
font-style: oblique;
color: 235447;
}
hr
{
margin-top: 10px;
margin-bottom: 10px;
}

</style>


<body>
<?php

// create an array containing all my blog posts and the information about them
$blog = [

    [

        'title' => 'This is my fifth post.',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum orci in condimentum luctus. Pellentesque consequat risus eget ex suscipit, et aliquet mi accumsan. Nullam est magna, ultrices non ornare sit amet, bibendum ut ante. Vestibulum eleifend leo vitae luctus molestie. Pellentesque sem leo, vestibulum molestie ipsum nec, dignissim congue justo. Nulla tincidunt odio in neque cursus, in feugiat massa egestas. Vivamus auctor, purus eget posuere sagittis, libero libero lacinia libero, ut hendrerit felis purus et orci. Donec sit amet sagittis augue, ut lobortis arcu.' . PHP_EOL . PHP_EOL . 'Sed at blandit velit. Integer aliquam tincidunt enim in efficitur. Donec vulputate gravida mauris, ut venenatis leo tempor sit amet. Morbi imperdiet magna et placerat lobortis. Maecenas cursus, turpis ut luctus dictum, neque risus pellentesque magna, eget imperdiet mi est vitae sem. In eget orci et purus fringilla egestas. Aenean porta turpis quis ipsum accumsan tristique. Suspendisse potenti.' . PHP_EOL . PHP_EOL . 'Curabitur non luctus arcu. Duis tincidunt lobortis diam ac pellentesque. Aliquam luctus venenatis neque, in volutpat ex euismod at. Maecenas imperdiet auctor mi a feugiat. Aliquam sit amet malesuada metus. Donec luctus aliquam tellus, ac pretium tortor condimentum eget. Vivamus aliquam erat nisl, ut fermentum ligula vestibulum at. Donec magna augue, facilisis in fermentum sed, luctus vitae massa. Nunc vitae tortor mauris. In hac habitasse platea dictumst. Mauris pretium est at enim sagittis, ac pellentesque massa ultrices. Vivamus vehicula sapien ante, vitae malesuada purus laoreet sit amet.' . PHP_EOL . PHP_EOL . 'Nunc at imperdiet lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis elementum odio sed tellus fermentum placerat. Suspendisse eleifend est gravida placerat dapibus. Nam vel dapibus odio. Ut accumsan rhoncus urna, sed semper lorem. Integer dictum turpis urna. Nullam imperdiet ex nec dolor sollicitudin dapibus. Donec lacinia, velit ac luctus fringilla, ante nibh pellentesque sem, nec aliquam elit turpis ut elit. Phasellus ultrices aliquet risus, quis fermentum lectus faucibus et. Proin id suscipit dolor. Morbi molestie ex diam, sit amet semper lectus posuere viverra. Vivamus accumsan velit non purus cursus, at sodales velit posuere. Proin dignissim condimentum fringilla. In efficitur lorem eleifend interdum ullamcorper. Nulla facilisi.' . PHP_EOL . PHP_EOL . 'Mauris ut nisl lacinia lectus venenatis faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dolor urna, elementum vel neque sit amet, pretium feugiat ipsum. Praesent in tempor justo. Aenean nisi est, ullamcorper in mauris vel, placerat tristique erat. Sed tempor felis ac volutpat finibus. In hac habitasse platea dictumst. Etiam imperdiet quam dolor, id eleifend ex malesuada volutpat. Aliquam vel diam sed tellus pretium mollis non et orci. Nam cursus mattis sem, sit amet eleifend orci ultricies hendrerit. Cras a leo ac sapien lobortis pellentesque.',
        'date' => '2017-09-30 19:45:00',
        'author' => 'branja'

    ],

    [

        'title' => 'This is my fourth post.',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum orci in condimentum luctus. Pellentesque consequat risus eget ex suscipit, et aliquet mi accumsan. Nullam est magna, ultrices non ornare sit amet, bibendum ut ante. Vestibulum eleifend leo vitae luctus molestie. Pellentesque sem leo, vestibulum molestie ipsum nec, dignissim congue justo. Nulla tincidunt odio in neque cursus, in feugiat massa egestas. Vivamus auctor, purus eget posuere sagittis, libero libero lacinia libero, ut hendrerit felis purus et orci. Donec sit amet sagittis augue, ut lobortis arcu.' . PHP_EOL . PHP_EOL . 'Sed at blandit velit. Integer aliquam tincidunt enim in efficitur. Donec vulputate gravida mauris, ut venenatis leo tempor sit amet. Morbi imperdiet magna et placerat lobortis. Maecenas cursus, turpis ut luctus dictum, neque risus pellentesque magna, eget imperdiet mi est vitae sem. In eget orci et purus fringilla egestas. Aenean porta turpis quis ipsum accumsan tristique. Suspendisse potenti.' . PHP_EOL . PHP_EOL . 'Curabitur non luctus arcu. Duis tincidunt lobortis diam ac pellentesque. Aliquam luctus venenatis neque, in volutpat ex euismod at. Maecenas imperdiet auctor mi a feugiat. Aliquam sit amet malesuada metus. Donec luctus aliquam tellus, ac pretium tortor condimentum eget. Vivamus aliquam erat nisl, ut fermentum ligula vestibulum at. Donec magna augue, facilisis in fermentum sed, luctus vitae massa. Nunc vitae tortor mauris. In hac habitasse platea dictumst. Mauris pretium est at enim sagittis, ac pellentesque massa ultrices. Vivamus vehicula sapien ante, vitae malesuada purus laoreet sit amet.' . PHP_EOL . PHP_EOL . 'Nunc at imperdiet lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis elementum odio sed tellus fermentum placerat. Suspendisse eleifend est gravida placerat dapibus. Nam vel dapibus odio. Ut accumsan rhoncus urna, sed semper lorem. Integer dictum turpis urna. Nullam imperdiet ex nec dolor sollicitudin dapibus. Donec lacinia, velit ac luctus fringilla, ante nibh pellentesque sem, nec aliquam elit turpis ut elit. Phasellus ultrices aliquet risus, quis fermentum lectus faucibus et. Proin id suscipit dolor. Morbi molestie ex diam, sit amet semper lectus posuere viverra. Vivamus accumsan velit non purus cursus, at sodales velit posuere. Proin dignissim condimentum fringilla. In efficitur lorem eleifend interdum ullamcorper. Nulla facilisi.' . PHP_EOL . PHP_EOL . 'Mauris ut nisl lacinia lectus venenatis faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dolor urna, elementum vel neque sit amet, pretium feugiat ipsum. Praesent in tempor justo. Aenean nisi est, ullamcorper in mauris vel, placerat tristique erat. Sed tempor felis ac volutpat finibus. In hac habitasse platea dictumst. Etiam imperdiet quam dolor, id eleifend ex malesuada volutpat. Aliquam vel diam sed tellus pretium mollis non et orci. Nam cursus mattis sem, sit amet eleifend orci ultricies hendrerit. Cras a leo ac sapien lobortis pellentesque.',
        'date' => '2017-09-29 19:45:00',
        'author' => 'branja'

    ],

    [

        'title' => 'This is my third post.',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum orci in condimentum luctus. Pellentesque consequat risus eget ex suscipit, et aliquet mi accumsan. Nullam est magna, ultrices non ornare sit amet, bibendum ut ante. Vestibulum eleifend leo vitae luctus molestie. Pellentesque sem leo, vestibulum molestie ipsum nec, dignissim congue justo. Nulla tincidunt odio in neque cursus, in feugiat massa egestas. Vivamus auctor, purus eget posuere sagittis, libero libero lacinia libero, ut hendrerit felis purus et orci. Donec sit amet sagittis augue, ut lobortis arcu.' . PHP_EOL . PHP_EOL . 'Sed at blandit velit. Integer aliquam tincidunt enim in efficitur. Donec vulputate gravida mauris, ut venenatis leo tempor sit amet. Morbi imperdiet magna et placerat lobortis. Maecenas cursus, turpis ut luctus dictum, neque risus pellentesque magna, eget imperdiet mi est vitae sem. In eget orci et purus fringilla egestas. Aenean porta turpis quis ipsum accumsan tristique. Suspendisse potenti.' . PHP_EOL . PHP_EOL . 'Curabitur non luctus arcu. Duis tincidunt lobortis diam ac pellentesque. Aliquam luctus venenatis neque, in volutpat ex euismod at. Maecenas imperdiet auctor mi a feugiat. Aliquam sit amet malesuada metus. Donec luctus aliquam tellus, ac pretium tortor condimentum eget. Vivamus aliquam erat nisl, ut fermentum ligula vestibulum at. Donec magna augue, facilisis in fermentum sed, luctus vitae massa. Nunc vitae tortor mauris. In hac habitasse platea dictumst. Mauris pretium est at enim sagittis, ac pellentesque massa ultrices. Vivamus vehicula sapien ante, vitae malesuada purus laoreet sit amet.' . PHP_EOL . PHP_EOL . 'Nunc at imperdiet lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis elementum odio sed tellus fermentum placerat. Suspendisse eleifend est gravida placerat dapibus. Nam vel dapibus odio. Ut accumsan rhoncus urna, sed semper lorem. Integer dictum turpis urna. Nullam imperdiet ex nec dolor sollicitudin dapibus. Donec lacinia, velit ac luctus fringilla, ante nibh pellentesque sem, nec aliquam elit turpis ut elit. Phasellus ultrices aliquet risus, quis fermentum lectus faucibus et. Proin id suscipit dolor. Morbi molestie ex diam, sit amet semper lectus posuere viverra. Vivamus accumsan velit non purus cursus, at sodales velit posuere. Proin dignissim condimentum fringilla. In efficitur lorem eleifend interdum ullamcorper. Nulla facilisi.' . PHP_EOL . PHP_EOL . 'Mauris ut nisl lacinia lectus venenatis faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dolor urna, elementum vel neque sit amet, pretium feugiat ipsum. Praesent in tempor justo. Aenean nisi est, ullamcorper in mauris vel, placerat tristique erat. Sed tempor felis ac volutpat finibus. In hac habitasse platea dictumst. Etiam imperdiet quam dolor, id eleifend ex malesuada volutpat. Aliquam vel diam sed tellus pretium mollis non et orci. Nam cursus mattis sem, sit amet eleifend orci ultricies hendrerit. Cras a leo ac sapien lobortis pellentesque.',
        'date' => '2017-09-28 13:30:25',
        'author' => 'branja'

    ],

    [

        'title' => 'This is my second post.',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum orci in condimentum luctus. Pellentesque consequat risus eget ex suscipit, et aliquet mi accumsan. Nullam est magna, ultrices non ornare sit amet, bibendum ut ante. Vestibulum eleifend leo vitae luctus molestie. Pellentesque sem leo, vestibulum molestie ipsum nec, dignissim congue justo. Nulla tincidunt odio in neque cursus, in feugiat massa egestas. Vivamus auctor, purus eget posuere sagittis, libero libero lacinia libero, ut hendrerit felis purus et orci. Donec sit amet sagittis augue, ut lobortis arcu.' . PHP_EOL . PHP_EOL . 'Sed at blandit velit. Integer aliquam tincidunt enim in efficitur. Donec vulputate gravida mauris, ut venenatis leo tempor sit amet. Morbi imperdiet magna et placerat lobortis. Maecenas cursus, turpis ut luctus dictum, neque risus pellentesque magna, eget imperdiet mi est vitae sem. In eget orci et purus fringilla egestas. Aenean porta turpis quis ipsum accumsan tristique. Suspendisse potenti.' . PHP_EOL . PHP_EOL . 'Curabitur non luctus arcu. Duis tincidunt lobortis diam ac pellentesque. Aliquam luctus venenatis neque, in volutpat ex euismod at. Maecenas imperdiet auctor mi a feugiat. Aliquam sit amet malesuada metus. Donec luctus aliquam tellus, ac pretium tortor condimentum eget. Vivamus aliquam erat nisl, ut fermentum ligula vestibulum at. Donec magna augue, facilisis in fermentum sed, luctus vitae massa. Nunc vitae tortor mauris. In hac habitasse platea dictumst. Mauris pretium est at enim sagittis, ac pellentesque massa ultrices. Vivamus vehicula sapien ante, vitae malesuada purus laoreet sit amet.' . PHP_EOL . PHP_EOL . 'Nunc at imperdiet lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis elementum odio sed tellus fermentum placerat. Suspendisse eleifend est gravida placerat dapibus. Nam vel dapibus odio. Ut accumsan rhoncus urna, sed semper lorem. Integer dictum turpis urna. Nullam imperdiet ex nec dolor sollicitudin dapibus. Donec lacinia, velit ac luctus fringilla, ante nibh pellentesque sem, nec aliquam elit turpis ut elit. Phasellus ultrices aliquet risus, quis fermentum lectus faucibus et. Proin id suscipit dolor. Morbi molestie ex diam, sit amet semper lectus posuere viverra. Vivamus accumsan velit non purus cursus, at sodales velit posuere. Proin dignissim condimentum fringilla. In efficitur lorem eleifend interdum ullamcorper. Nulla facilisi.' . PHP_EOL . PHP_EOL . 'Mauris ut nisl lacinia lectus venenatis faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dolor urna, elementum vel neque sit amet, pretium feugiat ipsum. Praesent in tempor justo. Aenean nisi est, ullamcorper in mauris vel, placerat tristique erat. Sed tempor felis ac volutpat finibus. In hac habitasse platea dictumst. Etiam imperdiet quam dolor, id eleifend ex malesuada volutpat. Aliquam vel diam sed tellus pretium mollis non et orci. Nam cursus mattis sem, sit amet eleifend orci ultricies hendrerit. Cras a leo ac sapien lobortis pellentesque.',
        'date' => '2017-09-26 9:50:00',
        'author' => 'branja'

    ],

    [

        'title' => 'This is my first post.',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum orci in condimentum luctus. Pellentesque consequat risus eget ex suscipit, et aliquet mi accumsan. Nullam est magna, ultrices non ornare sit amet, bibendum ut ante. Vestibulum eleifend leo vitae luctus molestie. Pellentesque sem leo, vestibulum molestie ipsum nec, dignissim congue justo. Nulla tincidunt odio in neque cursus, in feugiat massa egestas. Vivamus auctor, purus eget posuere sagittis, libero libero lacinia libero, ut hendrerit felis purus et orci. Donec sit amet sagittis augue, ut lobortis arcu.' . PHP_EOL . PHP_EOL . 'Sed at blandit velit. Integer aliquam tincidunt enim in efficitur. Donec vulputate gravida mauris, ut venenatis leo tempor sit amet. Morbi imperdiet magna et placerat lobortis. Maecenas cursus, turpis ut luctus dictum, neque risus pellentesque magna, eget imperdiet mi est vitae sem. In eget orci et purus fringilla egestas. Aenean porta turpis quis ipsum accumsan tristique. Suspendisse potenti.' . PHP_EOL . PHP_EOL . 'Curabitur non luctus arcu. Duis tincidunt lobortis diam ac pellentesque. Aliquam luctus venenatis neque, in volutpat ex euismod at. Maecenas imperdiet auctor mi a feugiat. Aliquam sit amet malesuada metus. Donec luctus aliquam tellus, ac pretium tortor condimentum eget. Vivamus aliquam erat nisl, ut fermentum ligula vestibulum at. Donec magna augue, facilisis in fermentum sed, luctus vitae massa. Nunc vitae tortor mauris. In hac habitasse platea dictumst. Mauris pretium est at enim sagittis, ac pellentesque massa ultrices. Vivamus vehicula sapien ante, vitae malesuada purus laoreet sit amet.' . PHP_EOL . PHP_EOL . 'Nunc at imperdiet lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis elementum odio sed tellus fermentum placerat. Suspendisse eleifend est gravida placerat dapibus. Nam vel dapibus odio. Ut accumsan rhoncus urna, sed semper lorem. Integer dictum turpis urna. Nullam imperdiet ex nec dolor sollicitudin dapibus. Donec lacinia, velit ac luctus fringilla, ante nibh pellentesque sem, nec aliquam elit turpis ut elit. Phasellus ultrices aliquet risus, quis fermentum lectus faucibus et. Proin id suscipit dolor. Morbi molestie ex diam, sit amet semper lectus posuere viverra. Vivamus accumsan velit non purus cursus, at sodales velit posuere. Proin dignissim condimentum fringilla. In efficitur lorem eleifend interdum ullamcorper. Nulla facilisi.' . PHP_EOL . PHP_EOL . 'Mauris ut nisl lacinia lectus venenatis faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dolor urna, elementum vel neque sit amet, pretium feugiat ipsum. Praesent in tempor justo. Aenean nisi est, ullamcorper in mauris vel, placerat tristique erat. Sed tempor felis ac volutpat finibus. In hac habitasse platea dictumst. Etiam imperdiet quam dolor, id eleifend ex malesuada volutpat. Aliquam vel diam sed tellus pretium mollis non et orci. Nam cursus mattis sem, sit amet eleifend orci ultricies hendrerit. Cras a leo ac sapien lobortis pellentesque.',
        'date' => '2017-07-01 01:15:00',
        'author' => 'branja'

    ]

];

// create a header saying 'Eriyeza's Blog'
echo '<h1> Eriyeza Buwembo\'s Perfect Blog!</h1>';

// create a div tag containing the blog posts
echo '<div>';

// for each post in the array blog,
foreach( $blog as $post ) {

	// post the title as a header
    echo '<h2>', $post['title'], '</h2>';

	// post the content with line breaks between paragraphs.
	$postWithParagraphs = preg_replace( "/[\n\r]+/", '</p> <p>', $post['content']);
    echo '<p>', $postWithParagraphs, '</p>';

	// underneath the title of the blog, write the author and the date and time it was posted
    echo '<h3>Posted by <b>', $post['author'], ' </b>on <b>', date( 'F jS, Y </b> \a\t \<b>g:i A', strtotime($post['date'])), '</b></h3>';

	// create a line that separates the blogs from each other
	echo '<hr>';
}

// end the div tag
echo '</div>';
?>



</body>
</html>



