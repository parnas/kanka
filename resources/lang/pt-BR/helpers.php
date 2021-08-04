<?php

return [
    'age'               => [
        'description'   => 'Você pode vincular um personagem a um calendário da campanha visualizando um personagem e indo para a guia Lembretes. A partir daí, adicione um novo lembrete e defina o tipo como Nascimento ou Morte para calcular automaticamente a idade do personagem. Se o nascimento e a morte estiverem presentes, ambas as datas serão mostradas, bem como a idade da morte. Se apenas o nascimento for definido, a data e a idade atual serão mostradas. Se apenas a morte for definida, a data e os anos desde a morte serão mostrados.',
        'title'         => 'Idade do personagem e Morte',
    ],
    'attributes'        => [
        'con'               => 'Con',
        'description'       => 'Use atributos para representar valores anexados a uma entidade que não é texto. Você pode fazer referência a entidades em atributos usando a sintaxe de menções avançadas :mention. Você também pode fazer referência a outros atributos usando a sintaxe :attribute.',
        'level'             => 'Nível',
        'link'              => 'Opções de atributo',
        'math'              => 'Você também pode ser criativo com algumas opções matemáticas básicas. Por exemplo, :example irá multiplicar os atributos :level e : on desta entidade. Se você quiser arredondar para cima ou para baixo, você pode usar :floor ou :ceil',
        'name'              => 'Você pode fazer referência ao nome da entidade com :name. Se existir um atributo com esse nome, o atributo será usado em seu lugar.',
        'pinned'            => 'Fixar um atributo usando o ícone :icon fará com que ele apareça no menu da entidade abaixo de sua imagem.',
        'private'           => 'Atributos privados usando o :icon irão torná-los visíveis apenas para membros com a função de administrador da campanha.',
        'random'            => 'Ao criar ou editar um modelo de atributo, você pode definir atributos aleatórios. Pode ser um valor aleatório entre dois números separados por :dash, ou um valor aleatório de uma lista de valores separados por :comma. O valor do atributo é determinado quando o modelo é aplicado a uma entidade ou quando uma entidade é salva.',
        'random_examples'   => 'Por exemplo, se você quiser um número entre 1 e 100, use :number. Se você quiser um valor de uma lista de opções, use :list.',
        'title'             => 'Atributos',
    ],
    'description'       => 'Algumas dicas e truques para te ajudar com o Kanka',
    'dice'              => [
        'description'               => 'O lançamento de dados genéricos é possível escrevendo "d20", "4d4 + 4", "d%" para porcentagem e "df" para fudge.',
        'description_attributes'    => 'Também é possível obter o atributo de um personagem usando a sintaxe {character.attribute_name}. Por exemplo, {character.level}d6+{character.wisdom}.',
        'more'                      => 'Mais opções estão disponíveis e explicadas na página do plugin da rolagem de dados.',
        'title'                     => 'Rolagem de dados',
    ],
    'entity_templates'  => [
        'description'   => 'Ao criar novas entidades, você pode criar uma com base em um modelo em vez de começar a partir de um formulário vazio. Para definir uma entidade como modelo, visualize-a e clique no :link no botão ações :action no canto superior direito. Ao visualizar uma lista de entidades, os modelos desse tipo de entidade estarão disponíveis ao lado do botão :new. Você pode ter vários modelos para cada tipo de entidade.',
        'link'          => 'Como configurar modelos',
        'remove'        => 'Para remover uma entidade como um modelo, clique na ação :remove que substitui a ação do :link detalhada acima.',
        'title'         => 'Modelos de Entidade',
    ],
    'filters'           => [
        'clipboard'     => 'Quando os filtros estão ativos, o botão copiar para a área de transferência torna-se ativo. Isso copia os filtros para a área de transferência e você pode usá-los para filtros de widget do dashboard ou para filtros de link rápido.',
        'description'   => 'Você pode usar filtros para limitar a quantidade de resultados mostrados nas listas. Os campos de texto oferecem suporte a várias opções para controlar em mais detalhes o que é filtrado.',
        'empty'         => 'Escrevendo :tag em um campo irá pesquisar todas as entidades onde este campo estiver vazio.',
        'ending_with'   => 'Ao colocar uma :tag no final do seu texto, você pode pesquisar todas as entidades com exatamente este texto no campo.',
        'multiple'      => 'Você pode combinar opções de pesquisa em campos de texto escrevendo :sintax. Por exemplo :example.',
        'session'       => 'Filtros e colunas ordenadas definidos para uma lista de entidades são salvos em sua sessão, então, desde que você permaneça conectado, não é necessário redefini-los em todas as páginas.',
        'starting_with' => 'Ao colocar uma :tag antes do seu texto, você pode pesquisar qualquer coisa que não contenha o texto no campo.',
        'title'         => 'Como usar filtros',
    ],
    'link'              => [
        'attributes'        => 'Você pode fazer referência a atributos da entidade digitando :code. Isso só funciona para atributos existentes da entidade.',
        'auto_update'       => 'Os links para outras entidades serão atualizados automaticamente quando o nome ou a descrição do alvo for alterado.',
        'description'       => 'Você pode facilmente criar um link para outras entidades quando estiver criando ou editando personagens, locais e etc. Apenas escreva os seguintes códigos com o nome da entidade que você gostaria de vincular.',
        'formatting'        => [
            'text'  => 'A lista de tags e atributos HTML permitidos pode ser vista em nosso :github.',
            'title' => 'Formatação',
        ],
        'friendly_mentions' => 'Conecte-se a outras entidades digitando :code e os primeiros caracteres de uma entidade para pesquisá-lo. Isso injetará :example no editor de texto e renderizará como um link para a entidade ao visualizar essa entidade.',
        'limitations'       => 'Observe que devido a limitações técnicas, essas abreviações não funcionam em dispositivos móveis Android, a menos que use o novo editor Summernote. Você pode alterar seu editor em Configurações> Preferências de layout.',
        'mention_helpers'   => 'Se o nome da sua entidade tiver um espaço, use :example em vez de espaço. Se você deseja pesquisar uma entidade com exatamente esse nome, digite :exact.',
        'mentions'          => 'Conecte-se a outras entidades digitando :code e os primeiros caracteres de uma entidade para pesquisá-lo. Isso colocará :example no editor de texto. Para personalizar o nome da entidade exibida, você pode digitar :example_name. Para definir a subpágina da entidade, use :example_page. Para definir a guia da entidade, use :example_tab.',
        'mentions_field'    => 'Você também pode exibir um campo da entidade em vez de seu nome no link com :code.',
        'months'            => 'Digite :code para obter uma lista de meses de seus calendários.',
        'options'           => 'Algumas opções são :options.',
        'title'             => 'Criando um link para outras entidades',
    ],
    'map'               => [
        'description'   => 'Carregar um mapa para um local habilitará o menu `Mapa` na página de visualização de Locais e um link direto para o mapa na página de locais da campanha. A partir da visualização do mapa, os usuários que podem editar a localização podem ativar o \'Modo de Edição\', que lhes permite colocar os Pontos do Mapa no mapa. Eles podem ser vinculados a uma entidade existente ou ser um rótulo e ter vários formatos e tamanhos.',
        'private'       => 'Os membros na função de Administrador da campanha podem tornar um mapa privado. Isso permite que os usuários vejam um local, mas para o mapa ficará escondido.',
        'title'         => 'Mapas de locais',
    ],
    'pins'              => [
        'description'   => 'As entidades podem ter relações e atributos fixados à direita de sua exibição de história. Para fixar um elemento, vá e edite a relação ou atributos e defina o valor fixado neles.',
        'title'         => 'Entidades Fixadas',
    ],
    'public'            => 'Assista a um tutorial em vídeo no Youtube explicando as campanhas públicas.',
    'title'             => 'Ajuda',
    'widget-filters'    => [
        'description'   => 'Você pode filtrar entidades exibidas no widget modificado recentemente, fornecendo uma lista de campos da entidade e valores. Por exemplo, você pode usar :example para filtrar personagens mortos do tipo PdM.',
        'link'          => 'filtros de widget',
        'more'          => 'Você pode copiar valores da URL em listas de entidades. Por exemplo, ao visualizar os personagens da campanha, filtre o tipo de personagens que deseja exibir e copie os valores após a :question na URL.',
        'title'         => 'Filtros dos Widgets do Dashboard',
    ],
];
