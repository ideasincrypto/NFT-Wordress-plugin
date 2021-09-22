import { ResponseError } from "./reponseError";

export interface ApiKey extends ResponseError {
    apiKey: string;
    plan: string;
    remainingCredits: number;
    usedCredits: number;
    nftCreated: number;
    nftSold: number;
    isTutorialDismissed: boolean;
}