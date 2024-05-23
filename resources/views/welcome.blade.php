
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning des Projets</title>
    <script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
    <script>mermaid.initialize({ startOnLoad: true });</script>
</head>
<body>
    <div class="mermaid">
gantt
    dateFormat  YYYY-MM-DD
    title       Planning des Projets

    @foreach ($projects as $project)
    section {{ $project->name }}
    {{ $project->name }} :{{ $project->status }}, {{ $project->start_date }}, {{ $project->end_date }}
    @endforeach
    </div>
</body>
</html>
