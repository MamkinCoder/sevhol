<div class="position-relative">
  <div class="d-block d-lg-none bgblur-easy2"></div>
  <div class="row p-2" id="callbackCard">
    <div class="offset-md-2 col-md-8 offset-md-2 offset-lg-3 col-lg-6 offset-lg-3 offset-xl-8 col-xl-4 offset-xxl-9 col-xxl-3 position-static position-xl-absolute">
      <div class="position-relative callback">
        <div class="cardblur d-none d-lg-block"></div>
        <div class="card">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="card-header d-flex align-items-center justify-content-between">
              <div>
                <h4>Заказать обратный звонок</h4>
                <h5>Перезвоним в течение получаса</h5>
              </div>
              <button onclick="applyClass()" type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <div class="card-body">
              <label for="name" class="form-label">Как к Вам обращаться:</label>
              <div class="input-group mb-3">
                <input type="text" autocomplete="name" placeholder="Николай Николаевич" name="name" id="name" aria-label="Name" class="form-control" required />
              </div>
              <label for="tel" class="form-label">Ваш номер телефона:</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">+7</span>
                <input class="formatted-phoneCard form-control" placeholder="123 456 78 90" name="tel" type="tel" id="tel" required />
              </div>
              <label class="form-label">Способ связи:</label>
              <div class="mb-3">
                <div class="form-check form-check-inline" id="contactType">
                  <input class="form-check-input" type="radio" name="contactType" value="whatsapp" id="radio_whatsapp" checked />
                  <label class="form-check-label" for="radio_whatsapp">
                    <img class="icon" src="img/WhatsApp.svg" alt="whatsapp logo" />
                    WhatsApp
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="contactType" value="telegram" id="radio_telegram" />
                  <label class="form-check-label" for="radio_telegram">
                    <img class="icon" alt="telegram logo" src="img/Telegram.svg" />
                    Telegram
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="contactType" value="phone" id="radio_phone" />
                  <label class="form-check-label" for="radio_phone">
                    <img class="icon" alt="phone logo" src="img/phone.svg" />
                    Мобильный
                  </label>
                </div>
              </div>
              <label for="email_form" class="col-form-label col-form-label-sm">Email (не обязательно):</label>
              <input type="email" class="form-control form-control-sm" name="email" id="email_form" placeholder="name@example.com" />
            </div>
            <div class="card-footer">
              <div class="d-flex flex-sm-row align-content-end">
                <small class="quet">Нажимая “Отправить”, Вы соглашаетесь с
                  <a data-bs-toggle="modal" data-bs-target="#policyModal" href="#">политикой обработки персональных данных</a>.</small>
                <button type="submit" class="btn btn-primary">Отправить</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>