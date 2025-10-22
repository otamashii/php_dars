<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Posts and Comments</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

  <h1 class="text-3xl font-bold mb-6 text-center">📚 Posts and Comments</h1>

  @foreach ($posts as $post)
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
      <h2 class="text-xl font-semibold text-blue-700">{{ $post->title }}</h2>
      <p class="text-gray-700 mt-2">{{ $post->description }}</p>

      <h3 class="mt-4 font-medium text-gray-800">💬 Comments:</h3>

      @if ($post->comments->count() > 0)
        <ul class="list-disc pl-6 mt-2 text-gray-600">
          @foreach ($post->comments as $comment)
            <li>{{ $comment->comment }}</li>
          @endforeach
        </ul>
      @else
        <p class="text-gray-500 italic">No comments yet.</p>
      @endif
    </div>
  @endforeach

</body>
</html>
