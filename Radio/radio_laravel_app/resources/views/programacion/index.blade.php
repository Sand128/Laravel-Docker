@foreach(\$programas as \$programa)
    <div>{{ \$programa->nombre }} - {{ \$programa->dia }}: {{ \$programa->hora_inicio }} a {{ \$programa->hora_fin }}</div>
@endforeach
