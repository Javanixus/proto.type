<template>
  <div class="profile">
      <div class="profile__sidebar">
          <div class="profileSidebar__header">
              <div class="avatar avatar--xl marginMagic" style="background-image: url(/images/sample.jpg);"></div>
              <div class="profileSidebarHeader__title">
                  <h3>{{profile.namebind}}</h3>
                  <p>{{profile.quotebind}}</p>
                  <p class="emailtitle">{{profile.emailbind}}</p>
              </div>
          </div>
          <div class="profileSidebar__content">
              <p class="profileSidebarContent__title">My projects:</p>
              <div v-if="isHasProjects" class="profileSidebarContent__core--alter">
                <div class="projectSidebar--item">
                  <h4>Project A</h4>
                  <p>5 peoples on project</p>
                </div>
                <div class="projectSidebar--item">
                  <h4>Project B</h4>
                  <p>3 peoples on project</p>
                </div>
              </div>
              <div v-else class="profileSidebarContent__core">
                <img src="/images/nocard.svg" alt="">
                <p>You dont have any project.</p>
              </div>
          </div>
      </div>
      <div class="profile__core">
          <div class="profileCore__header">
              <h4>Account Preferences</h4>
          </div>
          <div class="profileCore__content">
              <div class="preference">
                  <div class="preference__general">
                      <h2>General</h2>
                      <section class="preference__content">
                          <fieldset class="preference__form">
                            <label for="preferenceName">Name</label>
                            <input type="text" v-model="profile.namebind" maxlength="30" id="preferenceName" placeholder="Fill name">
                          </fieldset>
                          <fieldset class="preference__form">
                            <label for="preferenceStatus">Quotes</label>
                            <input type="text" v-model="profile.quotebind" maxlength="50" id="preferenceStatus" placeholder="Ar u seriously dude ? ah nvm">
                          </fieldset>
                          <fieldset class="preference__form">
                            <label for="preferenceEmail">Email address</label>
                            <input type="text" v-model="profile.emailbind" maxlength="50" id="preferenceEmail" placeholder="Fill email address">
                          </fieldset>
                          <fieldset class="preference__form">
                            <label for="preferencePhone">Phone</label>
                            <input type="text" v-model="profile.phonebind" maxlength="12" id="preferencePhone" v-on:keypress="isNumber(event)" placeholder="Fill your phone number here">
                          </fieldset>
                          <div class="preference__submit">
                              <button class="btn btn--primary">Save changes</button>
                          </div>
                      </section>
                  </div>
                <div class="preference__privacy">
                      <h2>Privacy</h2>
                      <section class="preference__content">
                        <fieldset class="preference__form">
                            <label for="preferencePassOld">Old password</label>
                            <input type="password" v-model="profile.oldpassbind" id="preferencePassOld" placeholder="•••••••••••••••••">
                        </fieldset>
                        <fieldset class="preference__form">
                            <label for="preferencePassNew">New password</label>
                            <input type="password" v-model="profile.newpassbind" id="preferencePassNew" placeholder="•••••••••••••••••">
                        </fieldset>
                        <fieldset class="preference__form">
                            <label for="preferencePassNew">Confirm new password</label>
                            <input type="password" v-model="profile.confirmnewpassbind" id="preferenceConfirmPassNew" placeholder="•••••••••••••••••">
                        </fieldset>
                      </section>
                    <div class="preference__submit">
                        <button class="btn btn--primary">Save changes</button>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>
<script>
export default {
  data: () => ({
    isHasProjects: false,
    profile:{
      namebind: 'Fahmi irsyad k',
      quotebind: 'JVNX Co-founder & Front End Dev',
      emailbind: 'fahmiirsyad11@icloud.com',
      phonebind: '',
      oldpassbind: '',
      newpassbind: '',
      confirmnewind: '',
    }
  }),
  methods: {
    isNumber: function(evt) {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if ((charCode > 31 && (charCode < 48 || charCode > 57))) {
        evt.preventDefault();
      } else {
        return true;
      }
    }
  },
}
</script>
