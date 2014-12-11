<h2>Snippet: {{ $snippet->name }}</h2> <!-- DISPLAYS THE SNIPPET NAME -->

<!-- PRINTS OUT THE SNIPPETS SLUG AND DIRECTS TO THE CORRECT URL -->

<p>Share it: <a href="">http://localhost/snippets/view/{{ $snippet->slug }}	</a></p>

<pre class="prettyprint">
{{ $snippet->code }}
</pre>
