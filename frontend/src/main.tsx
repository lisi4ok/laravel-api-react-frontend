import { createRoot } from 'react-dom/client'
import { BrowserRouter, Routes, Route } from "react-router";
import './index.css'
import { Provider } from 'react-redux';
import { store } from '@/store/store.ts';
import { ThemeProvider } from "@/components/theme-provider"

import Home from '@/pages/home';
import ContactCreate from "@/pages/contacts/create";

createRoot(document.getElementById('root')!).render(
    <Provider store={store}>
        <ThemeProvider>
            <BrowserRouter>
                <Routes>
                    <Route index element={<Home />} />
                    <Route index element={<ContactCreate />} />
                </Routes>
            </BrowserRouter>
        </ThemeProvider>
    </Provider>,
)
