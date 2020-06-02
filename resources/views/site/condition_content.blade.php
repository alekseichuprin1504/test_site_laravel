<section id="price">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12 text-center">
                    <h2 class="prokat__title">
                        Условия проката
                    </h2>
                </div>
                </div>
                <div class="col-12">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col">время проката</th>
                                <th scope="col">день проката</th>
                                <th scope="col">цена/грн</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($conditions))
                            @foreach($conditions as $condition)
                                <tr>
                                <th>{{$condition->time}}</th>
                                <td>{{$condition->days}}</td>
                                <td>{{$condition->price}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section id="prokat">
        <div class="container">
            <div class="row">
                
                <div class="col-12">
                    <p class="prokat__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus maiores vel ea beatae voluptate id, aliquam iusto molestias corrupti! Est a dolore tempore perspiciatis suscipit nisi quod natus explicabo possimus consequuntur, recusandae odit, unde doloremque, provident sequi nemo quaerat excepturi, perferendis. Ullam dignissimos saepe in esse, amet unde ad totam repudiandae sunt accusantium nihil facere provident, id. Itaque cum at distinctio officiis vero delectus illum fugiat libero nam voluptate necessitatibus alias dolores nobis ipsa, iure reiciendis maxime aspernatur explicabo. Consectetur voluptas tempora, assumenda ad consequatur minus, dignissimos commodi natus recusandae ea cum architecto earum, tenetur dicta numquam eum, delectus libero qui eveniet unde! Necessitatibus ratione, rem maxime error atque commodi aliquid fugit animi sequi laboriosam blanditiis dolor libero non hic assumenda eligendi deserunt doloribus ipsum ea veritatis, quisquam, magnam earum. Ut tenetur perspiciatis voluptas excepturi ea vitae tempora quisquam consequuntur quibusdam. Necessitatibus obcaecati non vitae numquam? Distinctio voluptates aut et, maxime, amet, dolorum culpa odio praesentium dolorem ipsum nostrum libero. Doloremque, suscipit voluptatibus sit, inventore quisquam placeat repudiandae quae consequuntur corporis natus maiores hic quidem atque dignissimos quibusdam officia commodi labore modi asperiores ab neque ea, quod dolorum consequatur qui! Quia labore veniam tempore laudantium reprehenderit tenetur ab distinctio adipisci officia alias iure nemo consequuntur nesciunt quidem deserunt molestiae, eveniet, dignissimos laborum est quasi, eius fuga magnam, esse facere in! Accusamus facere ea neque sunt optio nemo, praesentium inventore quos fugiat doloribus voluptas impedit voluptatem. Fugiat error quasi quidem delectus, voluptatum inventore, aut doloribus, debitis nisi eum modi impedit, dolore? 
                    </p>
                </div>
            </div>
        </div>
    </section>