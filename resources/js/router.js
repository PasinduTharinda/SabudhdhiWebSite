import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);

import MainPage from "./components/ExampleComponent.vue";
import AboutUs from "./components/aboutUs"
import Sunission from "./components/sunission"
import Downlload from "./components/downlload"
import Indexing from "./components/Indexing"
import Content from "./components/content"
import Announcement from "./components/announcement"
import Contact from "./components/contact"
import OldContent from "./components/oldContent"
import EditorBoarder from "./components/editorBoarder"
import AdminDashboard from "./components/adminDashboard"
import Articles from "./components/articles"
import EnglishDashboard from "./components/englishDashboard"
import AboutUsEng from "./components/aboutUsEng"
import SunissionEng from "./components/sunissionEng"
import IndexingEng from "./components/IndexingEng"
import ContactEng from "./components/contactEng"
import ContentEng from "./components/contentEng"
import OldContentEng from "./components/oldContentEng"
import AnnouncementEng from "./components/announcementEng"
import EditorBoarderEng from "./components/editorBoarderEng"
import Login from "./components/admin/login"



const routes = [
    { path: "/", component: MainPage, name: 'ExampleComponent'},
    { path: "/login", component: Login, name: 'Login'},
    { path: "/aboutus", component: AboutUs, name: 'aboutUs'},
    { path: "/sunission", component: Sunission, name: 'sunission'},
    { path: "/downlload", component: Downlload, name: 'downlload'},
    { path: "/indexing", component: Indexing, name: 'Indexing'},
    { path: "/content", component: Content, name: 'content'},
    { path: "/content", component: Content, name: 'content'},
    { path: "/announcement", component: Announcement, name: 'announcement'},
    { path: "/contact", component: Contact, name: 'contact'},
    { path: "/oldcontent", component: OldContent, name: 'oldContent'},
    { path: "/editorBoard", component: EditorBoarder, name: 'editorBoarder'},
    { path: "/admin", component: AdminDashboard, name: 'admin'},
    { path: "/articles", component: Articles, name: 'articles'},
    { path: "/engdashboard", component: EnglishDashboard, name: 'englishDashboard'},
    { path: "/aboutUsEng", component: AboutUsEng, name: 'aboutUSEng'},
    { path: "/indexingEng", component: IndexingEng, name: 'IndexingEng'},
    { path: "/contactEng", component: ContactEng, name: 'contactEng'},
    { path: "/contentEng", component: ContentEng, name: 'contentEng'},
    { path: "/sunissionEng", component: SunissionEng, name: 'sunissionEng'},
    { path: "/oldContentEng", component: OldContentEng, name: 'oldContentEng'},
    { path: "/announcementEng", component: AnnouncementEng, name: 'announcementEng'},
    { path: "/editorBoardEng", component: EditorBoarderEng, name: 'editorBoarderEng'},


];

export default new Router({
    mode: "history",
    routes
});
