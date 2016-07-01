<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}
        {{ Theme::asset()->styles() }}  
    </head>
    <body>
        {{ Theme::partial('header') }}
        
        <section>
            {{ Theme::place('content') }}
            {{ Theme::partial('subscribe') }}
        </section>

        {{ Theme::partial('footer') }}
        {{ Theme::partial('defaultjs') }}
        {{ Theme::partial('analytic') }}
    </body>
</html>
