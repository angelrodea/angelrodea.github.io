            <div class="row profesor my-3 py-3">
                <div class="col-md-2 text-center">
                    <img src="img/avatar.png" style="height: 130px;"/>
                    <h4 class="pt-3">Nombre</h4>
                </div>
                <div class="col-md-10">
                    <h5>Perfil profesional</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit cupiditate consequatur illum 
                        id nulla nam quia reprehenderit dolores architecto voluptatum iure, laboriosam possimus atque 
                        perspiciatis earum. Odio, eaque praesentium.
                    </p>
                    <h5>Experiencia laboral</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit cupiditate consequatur illum 
                        id nulla nam quia reprehenderit dolores architecto voluptatum iure, laboriosam possimus atque 
                        perspiciatis earum. Odio, eaque praesentium.
                    </p>
                    <h5>Aptitudes</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit cupiditate consequatur illum 
                        id nulla nam quia reprehenderit dolores architecto voluptatum iure, laboriosam possimus atque 
                        perspiciatis earum. Odio, eaque praesentium.
                    </p>
                    <h5>Otros datos</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit cupiditate consequatur illum 
                        id nulla nam quia reprehenderit dolores architecto voluptatum iure, laboriosam possimus atque 
                        perspiciatis earum. Odio, eaque praesentium.
                    </p>
                </div>
                <?php if (verifySession()): ?>
                    <form method="post" class="d-flex">
                        <input type="submit" name="edit" value="Modificar" class="btn btn-outline-primary m-1">
                        <input type="submit" name="delete" value="Eliminar" class="btn btn-outline-danger m-1">
                    </form>
                <?php endif; ?>
            </div>