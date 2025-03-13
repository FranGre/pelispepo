import { Role } from "./Role";

export interface User {
    films_likes_count: number;
    id: string;
    role_id: string;
    name: string;
    email: string;
    email_verified_at?: string;
    is_activated: boolean,
    role: Role
}

export type PageProps<
    T extends Record<string, unknown> = Record<string, unknown>,
> = T & {
    auth: {
        role: Role;
        user: User;
    };
};
